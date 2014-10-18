<?php

/* /home/clem/Dropbox/october/plugins/clem/feed/components/steam/library/container.htm */
class __TwigTemplate_aa5087955aa05b95e3b4ffc0e63e37000b11adf75cec73f43f53babae11a7a46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id='clemfeed-steamlibrary'
     class='feed-container'
     onInit='";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onInit'
     onAppend='";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onAppend' >
</div>


<div class='feed-container'>
    <div class='head'>
        <div class='heading'>STEAM GAMES</div>
        <div class='image'>
            <a href=''><img src='http://media.steampowered.com/steamcommunity/public/images/avatars/79/796959e6fbc6fb9ebe8b1b7a7c6093dd063ee2be_full.jpg' class='image'></a>
        </div>
        <div class='personaname'>squealpig</div>
    </div>
    <div class='body'>

        <div class='item'>
            <div class='image'>
                <a href=''><img src='http://media.steampowered.com/steamcommunity/public/images/apps/550/205863cc21e751a576d6fff851984b3170684142.jpg' class='image'></a>
            </div>
            <div class='name'>
                Left 4 Dead 2 Beta
            </div>
            <div class='time'>
                <div class='recent'>
                        2hrs 4mins
                </div>
                <div class='forever'>
                    12hrs 33mins
                </div>
            </div>
        </div>

        <div class='item'>
            <div class='image'>
                <a href=''><img src='http://media.steampowered.com/steamcommunity/public/images/apps/550/205863cc21e751a576d6fff851984b3170684142.jpg' class='image'></a>
            </div>
            <div class='name'>
                Left 4 Dead 2 Beta
            </div>
            <div class='time'>
                <div class='recent'>
                        2hrs 4mins
                </div>
                <div class='forever'>
                    12hrs 33mins
                </div>
            </div>
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/clem/Dropbox/october/plugins/clem/feed/components/steam/library/container.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  37 => 6,  26 => 3,  39 => 6,  33 => 5,  27 => 4,  23 => 3,  29 => 4,  22 => 2,  19 => 1,);
    }
}
