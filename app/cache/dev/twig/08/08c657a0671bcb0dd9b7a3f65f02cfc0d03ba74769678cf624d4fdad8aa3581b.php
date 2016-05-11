<?php

/* VideoBundle:Default:userVideo.html.twig */
class __TwigTemplate_04c2219811445b26973ac8f523eb6b8ea7ded527126e0d32e5d4b1163e9b8f71 extends Twig_Template
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
        $__internal_37024391ef92b7e97dd9b6f8fb0d6e49ffc409bdf709b032ee1156fe24f9ab21 = $this->env->getExtension("native_profiler");
        $__internal_37024391ef92b7e97dd9b6f8fb0d6e49ffc409bdf709b032ee1156fe24f9ab21->enter($__internal_37024391ef92b7e97dd9b6f8fb0d6e49ffc409bdf709b032ee1156fe24f9ab21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideoBundle:Default:userVideo.html.twig"));

        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("head.html.twig", "VideoBundle:Default:userVideo.html.twig", 4)->display($context);
        // line 5
        echo "
<div class=\"allVideo\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 8
            echo "        <div class=\"contentVideo\">
            <div class=\"videoBlock\">
                <a class=\"videoLink\" href=\"../video/";
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
        $this->loadTemplate("footer.html.twig", "VideoBundle:Default:userVideo.html.twig", 19)->display($context);
        
        $__internal_37024391ef92b7e97dd9b6f8fb0d6e49ffc409bdf709b032ee1156fe24f9ab21->leave($__internal_37024391ef92b7e97dd9b6f8fb0d6e49ffc409bdf709b032ee1156fe24f9ab21_prof);

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
        return array (  62 => 19,  58 => 17,  47 => 12,  43 => 11,  39 => 10,  35 => 8,  31 => 7,  27 => 5,  25 => 4,  22 => 3,);
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
/*                 <a class="videoLink" href="../video/{{ video.id }}">*/
/*                     <img src={{ video.image }} alt="">*/
/*                     <h3>{{ video.name }}</h3>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* </div>*/
/* */
/* {% include 'footer.html.twig' %}*/
