<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_40dacdd549ead722be23e58f960e85f22fe730488ae90397ffc639fa1a6143ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e06f8ecf81ea628b6dec04f1ba905e288b305ca0d98bd711903840046138a314 = $this->env->getExtension("native_profiler");
        $__internal_e06f8ecf81ea628b6dec04f1ba905e288b305ca0d98bd711903840046138a314->enter($__internal_e06f8ecf81ea628b6dec04f1ba905e288b305ca0d98bd711903840046138a314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    </head>
    <body>
        <header>
            <div class='logo'>HamsterHub</div>
                <ul class='ongletBlock'>
                <li><a href=\"..\">Acceuil</a></li>
                ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "                    <li><a href=\"../profile\">Profil</a></li>
                    <li><a href=\"../logout\">Déconexion</a></li>
                ";
        } else {
            // line 16
            echo "                    <li><a href=\"../register\">Inscription</a></li>
                    <li><a href=\"../login\">Connexion</a></li>
                ";
        }
        // line 19
        echo "            </ul>
        </header>
        <div class='container'>
            ";
        // line 22
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 23
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 24
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 25
                    echo "                        <div class=\"formMessage flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            ";
                    // line 26
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            ";
        }
        // line 31
        echo "            <div>
                ";
        // line 32
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 34
        echo "            </div>
        </div>
        <footer class='footer'>
            &copy; Julien Brandin & Jean-Philippe Isungu
        </footer>
    </body>
</html>
";
        
        $__internal_e06f8ecf81ea628b6dec04f1ba905e288b305ca0d98bd711903840046138a314->leave($__internal_e06f8ecf81ea628b6dec04f1ba905e288b305ca0d98bd711903840046138a314_prof);

    }

    // line 32
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_576b6d041c86b2c86d33d9778357620225e89c53256c79eb8bcdc84486f83ebe = $this->env->getExtension("native_profiler");
        $__internal_576b6d041c86b2c86d33d9778357620225e89c53256c79eb8bcdc84486f83ebe->enter($__internal_576b6d041c86b2c86d33d9778357620225e89c53256c79eb8bcdc84486f83ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 33
        echo "                ";
        
        $__internal_576b6d041c86b2c86d33d9778357620225e89c53256c79eb8bcdc84486f83ebe->leave($__internal_576b6d041c86b2c86d33d9778357620225e89c53256c79eb8bcdc84486f83ebe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 33,  110 => 32,  96 => 34,  94 => 32,  91 => 31,  88 => 30,  82 => 29,  73 => 26,  68 => 25,  63 => 24,  58 => 23,  56 => 22,  51 => 19,  46 => 16,  41 => 13,  39 => 12,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/framework/css/styles.css') }}" type="text/css" media="all" />*/
/*     </head>*/
/*     <body>*/
/*         <header>*/
/*             <div class='logo'>HamsterHub</div>*/
/*                 <ul class='ongletBlock'>*/
/*                 <li><a href="..">Acceuil</a></li>*/
/*                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                     <li><a href="../profile">Profil</a></li>*/
/*                     <li><a href="../logout">Déconexion</a></li>*/
/*                 {% else %}*/
/*                     <li><a href="../register">Inscription</a></li>*/
/*                     <li><a href="../login">Connexion</a></li>*/
/*                 {% endif %}*/
/*             </ul>*/
/*         </header>*/
/*         <div class='container'>*/
/*             {% if app.request.hasPreviousSession %}*/
/*                 {% for type, messages in app.session.flashbag.all() %}*/
/*                     {% for message in messages %}*/
/*                         <div class="formMessage flash-{{ type }}">*/
/*                             {{ message }}*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <div>*/
/*                 {% block fos_user_content %}*/
/*                 {% endblock fos_user_content %}*/
/*             </div>*/
/*         </div>*/
/*         <footer class='footer'>*/
/*             &copy; Julien Brandin & Jean-Philippe Isungu*/
/*         </footer>*/
/*     </body>*/
/* </html>*/
/* */
