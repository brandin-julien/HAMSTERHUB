<?php

/* VideoBundle:Default:index.html.twig */
class __TwigTemplate_28cab64925810bde565d12c9dc8c18caca7eb7a7a6dfc2141f62d7c4e2f2ba28 extends Twig_Template
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
        $__internal_d51222e5644e9bc1311d263971d42bae1e04c1db6ce94b0adaeda18a6e0b6a64 = $this->env->getExtension("native_profiler");
        $__internal_d51222e5644e9bc1311d263971d42bae1e04c1db6ce94b0adaeda18a6e0b6a64->enter($__internal_d51222e5644e9bc1311d263971d42bae1e04c1db6ce94b0adaeda18a6e0b6a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideoBundle:Default:index.html.twig"));

        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("head.html.twig", "VideoBundle:Default:index.html.twig", 4)->display($context);
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
                    <a class=\"videoLink\" href=\"video/";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "id", array()), "html", null, true);
            echo "\">
                        <img src=";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "image", array()), "html", null, true);
            echo " alt=\"\">
                    </a>
                    <a class=\"videoLink\" href=\"video/";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "id", array()), "html", null, true);
            echo "\">
                        <h3>";
            // line 14
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
        // line 19
        echo "</div>

";
        // line 21
        $this->loadTemplate("footer.html.twig", "VideoBundle:Default:index.html.twig", 21)->display($context);
        
        $__internal_d51222e5644e9bc1311d263971d42bae1e04c1db6ce94b0adaeda18a6e0b6a64->leave($__internal_d51222e5644e9bc1311d263971d42bae1e04c1db6ce94b0adaeda18a6e0b6a64_prof);

    }

    public function getTemplateName()
    {
        return "VideoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 21,  63 => 19,  52 => 14,  48 => 13,  43 => 11,  39 => 10,  35 => 8,  31 => 7,  27 => 5,  25 => 4,  22 => 3,);
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
/*                 <div class="videoBlock">*/
/*                     <a class="videoLink" href="video/{{ video.id }}">*/
/*                         <img src={{ video.image }} alt="">*/
/*                     </a>*/
/*                     <a class="videoLink" href="video/{{ video.id }}">*/
/*                         <h3>{{ video.name }}</h3>*/
/*                     </a>*/
/*                 </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* </div>*/
/* */
/* {% include 'footer.html.twig' %}*/
/* */
