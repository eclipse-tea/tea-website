<!DOCTYPE html>
<html>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/tea/head.php'; ?>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/tea/nav.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/tea/thumbs.php'; ?>

<?php modalImageDialog("/tea/documentation/images/tea-arch.png", "TEA Architecture Overview"); ?>

<div id="page">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h2>Documentation</h2>
				<p>
					This page contains an architecture overview of TEA along with a description of each component.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<h3>TEA Components</h3>
			</div>
		</div>
		<div class="row">
			<div class="span9">
				<p>
					TEA is built up of various building blocks depending on each other. The image shows a layer model of the TEA architecture. These are the components (more thorough description below).
					<ul>
						<li><em>TEA Core</em>: The core components of TEAs task execution engine. Everything in here is independent of any UI components.
							Although a basic headless application is included, the actual product for headless execution (which also allows to access UI bundles
							through the <em>headless presentation engine</em>) is included in <em>TEA Core UI</em>.</li>
						<li><em>TEA Core UI</em>: Contains integration into the Eclipse IDE (UI parts) as well as the headless execution product.</li>
						<li><em>TEA LiveView</em>: Contains a view that allows visualization of progress and status (errors, warnings, ...) of <em>TaskChain</em>s and individual <em>Task</em>s.</li>
						<li><em>TEA EASE Integration</em>: Integrates Eclipse TEA and Eclipse EASE projects in both directions. It is possible to execute
							EASE scripts as TEA <em>Task</em>s, as well as executing TEA <em>TaskChain</em>s from EASE Scripts. Along with the E4 Event Bridge
							in the <em>TEA Core UI</em> component, arbitrarily complex interactions between TEA and EASE are possible.</li>
						<li><em>TEA Build Library</em>: A collection of <em>Task</em>s and <em>TaskChain</em>s which integrate JDT/PDE/Maven and add build orchestration on top of all that.
							The included <code class="prettyprint">CleanBuildAllProjects</code> <em>TaskChain</em> can be used out of the box to build any
							workspace containing plug-in projects. Note that the default implementation ignores <em>Package-Import</em> dependencies between
							bundles though.</li>
						<li><em>TEA Build Library <a href="https://github.com/mduft/lcdsl" target="_blank">LcDsl</a> Integration</em>: Contains a collection of <em>Task</em>s and <em>TaskChain</em>s that allow to generate
							various P2 related artifacts from <a href="https://github.com/mduft/lcdsl" target="_blank">LcDsl</a> launch configurations. For instance the contents of a feature can be derived from
							the (automatically generated) list of dependencies from an <a href="https://github.com/mduft/lcdsl" target="_blank">LcDsl</a> launch configuration.</li>
					</ul>
				</p>
			</div>
			<div class="span3">
				<span class="pull-right">
					<?php imageThumb("/tea/documentation/images/tea-arch.png", "TEA Architecture Overview"); ?>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<h3>TEA Core</h3>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<p>
				TEA Core contains support for basic <em>Task</em> and <em>TaskChain</em> concepts.
				These are the classes and areas clients using TEA will most likely get in touch, or can use as starting points.
				Note that a lot of those classes contain nested annotations related directly to that class/interface.
				<ul>
					<li>Task Execution Control
						<ul>
							<li><code class="prettyprint">org.eclipse.tea.core.TaskExecutionContext</code>: All <em>Task</em>s need to be added to an execution context by a <em>TaskChain</em> implementation</li>
							<li><code class="prettyprint">org.eclipse.tea.core.services.TaskChain</code>: Service interface that needs to be implemented by all <em>TaskChain</em>s. 
								Note that <b>all</b> <em>TaskChain</em>s <b>must</b> be registered as OSGi service to be picked up by TEA. The easiest way to achieve this
								is to use declarative services through the <code class="prettyprint">@Component</code> annotation</li>
							<li>All annotations in <code class="prettyprint">org.eclipse.tea.core.annotations</code>: Relevant for implementing <em>TaskChain</em>s mostly.</li>
						</ul>
					</li>
					<li>Headless application &amp; Lifecycle
						<ul>
							<li><code class="prettyprint">org.eclipse.tea.core.services.TaskingLifeCycleListener</code>: Allows to react to general <em>Task</em> and <em>TaskChain</em> related events.</li>
							<li><code class="prettyprint">org.eclipse.tea.core.services.TaskingHeadlessLifeCycle</code>: Allows to react to events relevant only for headless execution</li>
							<li>All annotations in <code class="prettyprint">org.eclipse.tea.core.annotations.lifecycle</code>: Relevant for implementing lifecycle extensions which can react to TEA events in the system.</li>
						</ul>
					</li>
					<li>Configuration
						<ul>
							<li><code class="prettyprint">org.eclipse.tea.core.services.TaskingConfigurationExtension</code>: Service interface to be implemente by all configuration extensions. A configuration extension
								is a POJO that are made available for injection with all annotated fields automatically prefilled from either a <em>headless.properties</em> file or the Eclipse preferences of the used
								Eclipse (<em>headless.properties</em> has precedence if present).</li>
						</ul>
					</li>
					<li>Statistics
						<ul>
							<li><code class="prettyprint">org.eclipse.tea.core.services.TaskingStatisticsContribution</code>: Allows to contribute
								additional data to statistics that are reported (if configured) to a specific server. Statistics are reported by <em>POST</em>ing (HTTP)
								statistics as JSON serialized objects.</li>
						</ul>
					</li>
					<li>Logging
						<ul>
							<li><code class="prettyprint">org.eclipse.tea.core.services.TaskingLog</code>: The destination for all log messages that <em>Task</em> implementations wish to write.
								The output is redirected either to stdout in the headless case or the <em>Tasking Console</em> in the Eclipse Console View when used in the IDE</li>
						</ul>
					</li>
					<li>Progress Tracking
						<ul>
							<li><code class="prettyprint">org.eclipse.tea.core.services.TaskProgressTracker</code>: Allows to explicitly influence progress reporting as well as cancellation
								checks by <em>Task</em>s. TEA defaults to estimating the progress of a <em>Task</em> based on historic execution times if <em>TEA Core UI</em> is available</li>
						</ul>
					</li>
				</ul>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<h3>TEA Core UI</h3>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<p>
				TEA Core UI contains extended support for <em>Task</em> and <em>TaskChain</em> concepts related directly or indirectly
				to UI. For instance the headless application/product allows to access Eclipse UI bundles even without real UI (still
				requires an X11 display to be set though).
				These are the classes and areas clients using TEA will most likely get in touch, or can use as starting points.
				Note that a lot of those classes contain nested annotations related directly to that class/interface.
				<ul>
					<li>Dynamic IDE Menu
						<ul>
							<li><code class="prettyprint">org.eclipse.tea.core.ui.annotations.TaskChainUiInit</code>: a <em>TaskChain</em> may contain a method with this annotation
								to provide UI to the user in case the <em>TaskChain</em> is run from the IDE. Can be used to dynamically configure <em>Task</em>s in the <em>TaskChain</em></li>
							<li>The Dynamic Menu represents a Tree of <em>TaskChain</em>s based on the metadata (description, icon, etc.) annotated on the <em>TaskChain</em> using
								the annotations provided in <em>TEA Core</em></li>
						</ul>
					</li>
					<li>Advanced Headless Application
						<ul>
							<li>The advanced appliation and the associated product (use the product if in doubt!) provide headless execution capabilities for code that
								is otherwise actually UI bound. Some of Eclipse' functionality that is handy in a headless environment is UI bound for various reasons.</li>
							<li>There is no way/need to interact from code with this advanced application, it is a seemless extension to <em>TEA Core</em>s basic headless application.</li>
						</ul>
					</li>
					<li>E4 Event Bridge
						<ul>
							<li>The event bridge converts all lifecycle events fired by <em>TEA Core</em> to E4 events (topic: org/eclipse/tea/*)</li>
							<li>The events can be used by any other Eclipse component. For instance it is possible to run EASE scripts as reaction to TEA lifecycle events.</li>
						</ul>
					</li>
					<li>TEA Console
						<ul>
							<li>The TEA Console is a special console in the standard Eclipse Console View, which allows to display any output produced by TEA <em>Task</em>s.</li>
						</ul>
					</li>
					<li>Eclipse Preference Integration
						<ul>
							<li>Provides a preference page in the Eclipse Preferences dialog which allows to change (and store) values for 
								<code class="prettyprint">org.eclipse.tea.core.services.TaskingConfigurationExtension</code> implementations</li>
							<li>Use both when running <em>Task</em>s from the IDE as well as when running headlessly as a fallback to the <em>headless.properties</em> file.</li>
						</ul>
					</li>
					<li>Progress Estimation
						<ul>
							<li>Service that automatically estimated the progress of <em>Task</em>s based on historical execution time data. If available, this
								is the default for all <em>Task</em>s, and must be explicitly overruled - see <em>TEA Core</em></li>
						</ul>
					</li>
				</ul>
				</p>
			</div>
		</div>
	</div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/tea/footer.php'; ?>
</body>

</html>
