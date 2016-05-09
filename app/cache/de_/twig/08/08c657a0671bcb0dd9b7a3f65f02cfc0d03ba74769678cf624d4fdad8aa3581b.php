<?php

/* VideoBundle:Default:userVideo.html.twig */
class __TwigTemplate_04c2219811445b26973ac8f523eb6b8ea7ded527126e0d32e5d4b1163e9b8f71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03d9f0e14a92771bac18f8bd27b4ed6c4a83f2880f4724579940981fa9c7d982 = $this->env->getExtension("native_profiler");
        $__internal_03d9f0e14a92771bac18f8bd27b4ed6c4a83f2880f4724579940981fa9c7d982->enter($__internal_03d9f0e14a92771bac18f8bd27b4ed6c4a83f2880f4724579940981fa9c7d982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideoBundle:Default:userVideo.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 2
            echo "    <div class=\"contentVideo\">
        <div class=\"videoBlock\">
            <a class=\"video\" href=\"../video/";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "id", array()), "html", null, true);
            echo "\">
                <img src=";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "image", array()), "html", null, true);
            echo " alt=\"\">
                <h3>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "name", array()), "html", null, true);
            echo "</h3>
            </a>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_03d9f0e14a92771bac18f8bd27b4ed6c4a83f2880f4724579940981fa9c7d982->leave($__internal_03d9f0e14a92771bac18f8bd27b4ed6c4a83f2880f4724579940981fa9c7d982_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7913a6bfa1d8e20d6111a2e5c695b4e914711c34db7f3030e95799c51aebb980 = $this->env->getExtension("native_profiler");
        $__internal_7913a6bfa1d8e20d6111a2e5c695b4e914711c34db7f3030e95799c51aebb980->enter($__internal_7913a6bfa1d8e20d6111a2e5c695b4e914711c34db7f3030e95799c51aebb980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/video.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7913a6bfa1d8e20d6111a2e5c695b4e914711c34db7f3030e95799c51aebb980->leave($__internal_7913a6bfa1d8e20d6111a2e5c695b4e914711c34db7f3030e95799c51aebb980_prof);

    }

    public function getTemplateName()
    {
        return "VideoBundle:Default:userVideo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  53 => 12,  50 => 11,  39 => 6,  35 => 5,  31 => 4,  27 => 2,  23 => 1,);
    }
}
/* {% for video in videos %}*/
/*     <div class="contentVideo">*/
/*         <div class="videoBlock">*/
/*             <a class="video" href="../video/{{ video.id }}">*/
/*                 <img src={{ video.image }} alt="">*/
/*                 <h3>{{ video.name }}</h3>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* {% endfor %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/framework/css/video.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
