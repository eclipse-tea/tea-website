<!DOCTYPE html>
<html>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/tea/head.php'; ?>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/tea/nav.php'; ?>

<!--Container-->
<div id="header_wrapper">
  <div class="container image-slider">
    <div class="row">
      <h2>
        Task automation made easy!
      </h2>
      <p>TEA is a set of extensions for the Eclipse IDE with the primary goal to automate and execute tasks in a way, so they can be executed both in the IDE as well as in headless environments.
      A great portion of TEA deals with making it possible to execute the very same actions (e.g. compiling a project) from the IDE as well as headlessly without any additional configuration or setup effort. 
      Along with the core components of TEA itself, an extensive library of prebuilt tasks and actions comes along in the package.
        <br/><i><a href="#why-tea">Learn more...</a></i></p>
    </div>
  </div>
  <div class="row" style="text-align:center">
    <div>
      <div id="coverflow">
        <img class="intro-screenshot" style="display:none;" src="/tea/images/demo1.png" alt="Running tasks using headless console">
        <img class="intro-screenshot" src="/tea/images/demo2.png" alt="Running tasks in the IDE">
        <img class="intro-screenshot" style="display:none;" src="/tea/images/demo3.png" alt="Automatically generated preferences in the IDE">
      </div>
    </div>
    <div class="cta-section">
      <a href="/tea/download.php" style="margin:10px;" class="has-popover btn btn-primary btn-large pull_right">Download</a>
      <a href="/tea/documentation/index.php" style="margin:10px;" class="has-popover btn btn-success btn-large pull_right">Documentation</a>
    </div>
  </div>
</div>

<!-- TODO separator? -->

<div id="why-tea">
  <div class="container">
    <div class="row quick-overview">
      <div class="span12">
        <h1>Why TEA?</h1>
      </div>
      <div class="span4">
        <h4><img src="/tea/images/favicon.png"/>
          Easy to use</h4>
        <p>
          TEA provides an easy to use framework for extending the Eclipse IDE with arbitrarily complex tasks or combination of tasks (called task chain).
        </p>
      </div>
      <div class="span4">
        <h4><img src="/tea/images/favicon.png"/>
         High Quality</h4>
        <p>Although partially rewritten for the open source version, the basis of TEA has been in development since seven years, and is used on hundreds of developer machines every day.</p>
      </div>
      <div class="span4">
        <h4><img src="/tea/images/favicon.png"/>
          Single Environment</h4>
        <p>
          The strong focus on enabling all tasks written for TEA to also run headlessly allows to avoid additional infrastructure. For instance the TEA library tasks to clean and build a workspace also run headlessly,
          and are thus usable on Jenkins build environments, etc.
        </p>
      </div>
      <div class="span4">
        <h4><img src="/tea/images/favicon.png"/>
          Reproducability</h4>
        <p>
          Using the same code in the IDE and in headless builds allows to achieve reproducible results. If a build succeeds in the IDE, it will succeed headlessly too.
        </p>
      </div>
      <div class="span4">
        <h4><img src="/tea/images/favicon.png"/>
          Performance</h4>
        <p>Not everything in plain Eclipse is suitable for all use cases. The TEA build library provides tasks tailored to specific Eclipse RCP setups, which allows to strip down the
        required actions to build bundles. With a dedicated build orchestration, builds can be sped up by factors.
        </p>
      </div>
      <div class="span4">
        <h4><img src="/tea/images/favicon.png"/>
          Why not use EASE?</h4>
        <p>
          There are plenty things you can do using <a href="https://www.eclipse.org/ease/" target="_blank">Eclipse EASE</a>. Why use TEA after all? TEA tasks are usually provided as IDE plugin, and thus are available also when Eclipse runs on an empty workspace, whereas EASE scripts would require a configuration of script locations in the workspace, or the presence of projects containing those scripts.
          Also, TEA tasks can become very complex - which would be hard to handle with scripts alone. And last but not least: TEA tasks delivered as plugin cannot be easily modified by IDE users. This is clearly a benefit in some coporate environments.
        </p>
      </div>
      <div class="span12">
          <p><br/><i><a href="#feature-overview">Check out the features...</a></i></p>
      </div>
    </div>
  </div>
</div>

<div id="intro-companies" class="intro-reference">
  <div class="container companies">
  Powered and used by
      <img src="/tea/images/ssi_logo_70mm_iso_4c.png" alt="SSI Schaefer IT Solutions GmbH"/>
  </div>
</div>

<div id="feature-overview">
  <div class="container">
    <div class="row quick-overview">
      <div class="span12">
        <h1>Features</h1>
      </div>
      <div class="span4">
        <h4><img src="/tea/images/favicon.png"/>
          TEA Core Platform</h4>
        <p>The core platform of TEA provides the possibility to extend the IDE by implementing tasks, task chains, configuration and more. With a few simple building blocks, it is possible to provide complex tasks that aid developes in their daily work.</p>
      </div>
      <div class="span4">
        <h4><img src="/tea/images/favicon.png"/>
          TEA Build Library</h4>
        <p>For years, TEA has been used primarily to speed up Eclipse builds in certain scenarios. Since TEA has become open source, we are improving on the existing
        library to be suitable for more and more scenarios. Currently, Eclipse RCP / P2 is well supported for applications that don't use package import.</p>
      </div>
      <div class="span4">
        <h4><img src="/tea/images/favicon.png"/>
          EASE Integration</h4>
        <p>Want to leverage the power of the TEA library tasks but don't want to get your hands dirty building your own plugins? No worries, use the Eclipse EASE integration to provide tasks as scripts, build task chains by mixing scripts and pre-built tasks, etc.</p>
      </div>
    </div>
  </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/tea/footer.php'; ?>
</body>

</html>
