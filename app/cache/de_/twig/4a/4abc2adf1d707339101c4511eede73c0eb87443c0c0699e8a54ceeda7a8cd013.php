<?php

/* VideoBundle:Default:myVideos.html.twig */
class __TwigTemplate_d314450938d170b2a99c65516175650f8b3cc3478217b7d509da7390f6976d71 extends Twig_Template
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
        $__internal_2d329e42949afdad2ab53067fedcc274f55243c189ffa42d7edc7e4c8c290068 = $this->env->getExtension("native_profiler");
        $__internal_2d329e42949afdad2ab53067fedcc274f55243c189ffa42d7edc7e4c8c290068->enter($__internal_2d329e42949afdad2ab53067fedcc274f55243c189ffa42d7edc7e4c8c290068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideoBundle:Default:myVideos.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 2
            echo "    <div class=\"contentVideo\">
        <div class=\"videoBlock\">
            <a class=\"video\" href=\"video/";
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
        
        $__internal_2d329e42949afdad2ab53067fedcc274f55243c189ffa42d7edc7e4c8c290068->leave($__internal_2d329e42949afdad2ab53067fedcc274f55243c189ffa42d7edc7e4c8c290068_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_481bde42b9c5b4fcdd5c41628503f09020e2b11a6d560ba94b6bbec7eb7d1773 = $this->env->getExtension("native_profiler");
        $__internal_481bde42b9c5b4fcdd5c41628503f09020e2b11a6d560ba94b6bbec7eb7d1773->enter($__internal_481bde42b9c5b4fcdd5c41628503f09020e2b11a6d560ba94b6bbec7eb7d1773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/video.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_481bde42b9c5b4fcdd5c41628503f09020e2b11a6d560ba94b6bbec7eb7d1773->leave($__internal_481bde42b9c5b4fcdd5c41628503f09020e2b11a6d560ba94b6bbec7eb7d1773_prof);

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
        return array (  65 => 13,  53 => 12,  50 => 11,  39 => 6,  35 => 5,  31 => 4,  27 => 2,  23 => 1,);
    }
}
/* {% for video in videos %}*/
/*     <div class="contentVideo">*/
/*         <div class="videoBlock">*/
/*             <a class="video" href="video/{{ video.id }}">*/
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
