<!DOCTYPE html>
<html>
<?php include 'components/head.php'; ?>

<body>
<?php include 'components/nav.php'; ?>
<?php include 'components/thumbs.php'; ?>

<?php modalImageDialog("images/01-Main.png", "Headless TEA product settings"); ?>
<?php modalImageDialog("images/01-Arguments.png", "Headless TEA argument settings"); ?>

<div id="page">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h2>Getting Started</h2>
				<p>
					This page gives a simple getting started example that provides a quick tour through the basics of writing TEA <em>Task</em>s and <em>TaskChain</em>s.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<h3>Preparation</h3>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<p>
					To implement TEA components, you will need a workspace with a project that will host these components. Most importantly:
					<ul>
					<li>The Target Platform needs to be set to an Eclipse installation with TEA available. The most simple case is the running Eclipse with TEA installed (see <a href="download.html">here</a>).</li>
					<li>A plug-in project that will host the code.</li>
					<li>A launch configuration that will launch Eclipse with your plug-in added.</li>
					</ul>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<h3>Creating the first <em>Task</em></h3>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<p>
					A <em>Task</em> in TEA is nothing more than a simple POJO with an <em>@Execute</em> annotated method.
					<pre class="prettyprint linenums">
@Named("My Task")
public class MyTask {
	@Execute
	public void demo(TaskingLog log) {
		log.info("Hello World!");
	}
}
					</pre>
					Note how <em>@Named</em> can be used to set a user visible name for the task. If the annotation is not present,
					the <em>toString</em> of the <em>Task</em> is used, and if this is the default <em>Object.toString</em> the simple
					class name of the <em>Task</em> is used as a last resort.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<h3>Creating the first <em>TaskChain</em></h3>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<p>
					Now that there is a <em>Task</em>, we want to execute it somehow. TEA uses <em>TaskChain</em>s to accomplish this.
				</p>
				<p>
					Each <em>TaskChain</em> must at least:
					<ul>
					<li>Implement the <code class="prettyprint">TaskChain</code> interface.</li>
					<li>Be registered as OSGi service. The easiest way to do so is to use the <code class="prettyprint">@Component</code> annotation.
					Processing of this annotation needs to be enabled in Eclipse (on the projects properties: <em>Plug-in Development > DS Annotations > Generate descriptors from annotated sources</em>)</li>
					<li>Have a method annotated with <code class="prettyprint">@TaskChainContextInit</code> which accepts a <code class="prettyprint">TaskExecutionContext</code> (and optionally more parameters available for injection - more on this later).</li>
					</ul>
					
					Each <em>TaskChain</em> can optionally have:
					<ul>
					<li>A method annotated with <code class="prettyprint">@TaskChainUiInit</code> which may present UI to the user (and is called in the UI thread) in case the <em>TaskChain</em> is executed in the IDE.
						This method may accept a <code class="prettyprint">Shell</code> parameter which represents the <code class="prettyprint">Shell</code> to be used as parent for dialogs.</li>
					<li>A top-level <code class="prettyprint">@TaskChainId</code> annotation, which can be used to add a human readable description as well as aliases which can be used to access the <em>TaskChain</em> more easily from the command line application.</li>
					<li>A top-level <code class="prettyprint">@TaskChainMenuEntry</code> annotation, which can be used to make this <em>TaskChain</em> available from the <em>TEA</em> menu inside the IDE.</li> 
					</ul>
				</p>
				<p>
					A simple example <em>TaskChain</em> which contains the above <em>Task</em> could look like this:
					<pre class="prettyprint linenums">
@TaskChainId(description = "My TaskChain", alias = "MyChainAlias")
@TaskChainMenuEntry(path = "Demos")
@Component
public class MyChain implements TaskChain {
	@TaskChainContextInit
	public void init(TaskExecutionContext c) {
		c.addTask(MyTask.class);
	}
}
					</pre>
					Note that the <em>Task</em> is added using <code class="prettyprint">MyTask.class</code>. Alternatively, 
					if the <em>Task</em> would require additional constructor parameters, an instance of <code class="prettyprint">MyTask</code> could be passed as well.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<h3>Testing in the IDE</h3>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<p>
					Once you have these two classes in place, you can test your first <em>TaskChain</em> already.
					Simply run your prepared Eclipse launch configuration to run another IDE from your IDE. It now should
					contain a top-level menu entry <em>TEA > Demos > My TaskChain</em>. Clicking this menu item will
					run the <em>TaskChain</em> <code class="prettyprint">MyChain</code> from your plug-in.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<h3>Testing Headless</h3>
			</div>
		</div>
		<div class="row">
			<div class="span9">
				<p>
					This one is a little tricky at first. What you will need:
					<ul>
					<li>An (empty) property file called with an arbitrary name, lets call it <em>headless.properties</em>.</li>
					<li>The name of the <em>TaskChain</em> you want to run. In this case it's either 
						<code class="prettyprint">MyChainAlias</code> or the fully qualified class name 
						<code class="prettyprint">your.pkg.name.MyChain</code></li>
					</ul>
					Now you will need to create a new Eclipse launch configuration. You can copy this one from the Eclipse
					configuration you used before.
					Change the configuration and use <code>org.eclipse.tea.core.ui.HeadlessTaskingEngine</code> as product to run.
					Also change the Program arguments on the according tab. Add:
					<ul>
					<li>-properties /path/to/headless.properties</li>
					<li>-taskchain MyChainAlias</li>
					</ul>
					Once you run this launch configuration, you should see TEA starting up and executing your <em>TaskChain</em>
					before exiting again.
				</p>
			</div>
			<div class="span3">
				<span class="pull-right">
					<?php imageThumb("images/01-Main.png", "Headless TEA product settings"); ?>
					<?php imageThumb("images/01-Arguments.png", "Headless TEA argument settings"); ?>
				</span>
			</div>
		</div>
	</div>
</div>

<?php include 'components/footer.php'; ?>
</body>

</html>
