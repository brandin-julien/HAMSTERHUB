<?php

/* VideoBundle:Default:index.html.twig */
class __TwigTemplate_29569ddbe57af4b06959fde8653bfca6d4f71b8eb363b7f426dfe58e3b7b3183 extends Twig_Template
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
        $__internal_4cae850a18c47e9c6988c6dc1d53a8ae0ad870ed8ae73b28312527cdf667a6f4 = $this->env->getExtension("native_profiler");
        $__internal_4cae850a18c47e9c6988c6dc1d53a8ae0ad870ed8ae73b28312527cdf667a6f4->enter($__internal_4cae850a18c47e9c6988c6dc1d53a8ae0ad870ed8ae73b28312527cdf667a6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideoBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
</head>
<body>
\t<header>
\t\t<div class='logo'>HamsterHub</div>
\t\t\t<ul class='ongletBlock'>
                <li><a href=\"..\">Acceuil</a></li>
                ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo "                   \t<li><a href=\"../profile\">Profil</a></li>
                    <li><a href=\"../logout\">Déconexion</a></li>
                ";
        } else {
            // line 15
            echo "                    <li><a href=\"../register\">Inscription</a></li>
                \t<li><a href=\"../login\">Connexion</a></li>
            \t";
        }
        // line 18
        echo "            </ul>
\t</header>
\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 21
            echo "    \t<div class=\"contentVideo\">
    \t\t<div class=\"videoBlock\">
        \t\t<a class=\"video\" href=\"video/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "id", array()), "html", null, true);
            echo "\">
        \t\t\t<img src=";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "image", array()), "html", null, true);
            echo " alt=\"\">
            \t\t<h3>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "name", array()), "html", null, true);
            echo "</h3>
            \t</a>
        \t</div>
    \t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "<footer class='footer'>
\t&copy; Julien Brandin & Jean-Philippe Isungu
</footer>
</body>
</html>";
        
        $__internal_4cae850a18c47e9c6988c6dc1d53a8ae0ad870ed8ae73b28312527cdf667a6f4->leave($__internal_4cae850a18c47e9c6988c6dc1d53a8ae0ad870ed8ae73b28312527cdf667a6f4_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_19806766f88fc33b285d1ee2e257f1533178783c073a5222fd83c81c7b086a45 = $this->env->getExtension("native_profiler");
        $__internal_19806766f88fc33b285d1ee2e257f1533178783c073a5222fd83c81c7b086a45->enter($__internal_19806766f88fc33b285d1ee2e257f1533178783c073a5222fd83c81c7b086a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 31
        echo "\t";
        
        $__internal_19806766f88fc33b285d1ee2e257f1533178783c073a5222fd83c81c7b086a45->leave($__internal_19806766f88fc33b285d1ee2e257f1533178783c073a5222fd83c81c7b086a45_prof);

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
        return array (  101 => 31,  95 => 30,  84 => 32,  81 => 30,  70 => 25,  66 => 24,  62 => 23,  58 => 21,  54 => 20,  50 => 18,  45 => 15,  40 => 12,  38 => 11,  28 => 4,  23 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/* <head>*/
/* 	<link rel="stylesheet" href="{{ asset('bundles/framework/css/styles.css') }}" type="text/css" media="all" />*/
/* </head>*/
/* <body>*/
/* 	<header>*/
/* 		<div class='logo'>HamsterHub</div>*/
/* 			<ul class='ongletBlock'>*/
/*                 <li><a href="..">Acceuil</a></li>*/
/*                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                    	<li><a href="../profile">Profil</a></li>*/
/*                     <li><a href="../logout">Déconexion</a></li>*/
/*                 {% else %}*/
/*                     <li><a href="../register">Inscription</a></li>*/
/*                 	<li><a href="../login">Connexion</a></li>*/
/*             	{% endif %}*/
/*             </ul>*/
/* 	</header>*/
/* 	{% for video in videos %}*/
/*     	<div class="contentVideo">*/
/*     		<div class="videoBlock">*/
/*         		<a class="video" href="video/{{ video.id }}">*/
/*         			<img src={{ video.image }} alt="">*/
/*             		<h3>{{ video.name }}</h3>*/
/*             	</a>*/
/*         	</div>*/
/*     	</div>*/
/* 	{% endfor %}*/
/* 	{% block stylesheets %}*/
/* 	{% endblock %}*/
/* <footer class='footer'>*/
/* 	&copy; Julien Brandin & Jean-Philippe Isungu*/
/* </footer>*/
/* </body>*/
/* </html>*/
