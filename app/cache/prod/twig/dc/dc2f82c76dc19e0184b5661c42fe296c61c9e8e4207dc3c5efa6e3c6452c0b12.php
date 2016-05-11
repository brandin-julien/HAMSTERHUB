<?php

/* VideoBundle:Default:myVideos.html.twig */
class __TwigTemplate_56eea69ec1f6708683ef05591fab1ed7b22e480caa9e24cf3cb2a4df3e56d3a1 extends Twig_Template
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
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("head.html.twig", "VideoBundle:Default:myVideos.html.twig", 4)->display($context);
        // line 5
        echo "
<div class=\"allVideo\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 8
            echo "        <div class=\"contentVideo\">
            <div class=\"videoBlock\">
                    <a class=\"videoLink\" href=\"video/";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "id", array()), "html", null, true);
            echo "\">
                    <img src=";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "image", array()), "html", null, true);
            echo " alt=\"\">
                    <h3>";
            // line 12
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
        // line 17
        echo "</div>

";
        // line 19
        $this->loadTemplate("footer.html.twig", "VideoBundle:Default:myVideos.html.twig", 19)->display($context);
    }

    public function getTemplateName()
    {
        return "VideoBundle:Default:myVideos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  55 => 17,  44 => 12,  40 => 11,  36 => 10,  32 => 8,  28 => 7,  24 => 5,  22 => 4,  19 => 3,);
    }
}
/* {# app/Resources/views/head.html.twig #}*/
/* {# app/Resources/views/footer.html.twig #}*/
/* */
/* {% include 'head.html.twig' %}*/
/* */
/* <div class="allVideo">*/
/*     {% for video in videos %}*/
/*         <div class="contentVideo">*/
/*             <div class="videoBlock">*/
/*                     <a class="videoLink" href="video/{{ video.id }}">*/
/*                     <img src={{ video.image }} alt="">*/
/*                     <h3>{{ video.name }}</h3>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* </div>*/
/* */
/* {% include 'footer.html.twig' %}*/
/* */
