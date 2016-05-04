<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b8238e1033761ffca4dfd18d0f90754cfafa6804c6fe85246778a2fd94d993ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3913cacaf03cb8acae95c5f20e765b4a9f31b4b495f3b53c6d9601d6331497e7 = $this->env->getExtension("native_profiler");
        $__internal_3913cacaf03cb8acae95c5f20e765b4a9f31b4b495f3b53c6d9601d6331497e7->enter($__internal_3913cacaf03cb8acae95c5f20e765b4a9f31b4b495f3b53c6d9601d6331497e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- import icon font-awesome-->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css\">
    <!--Import Google Icon Font-->
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <!--Importmain.css-->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css\">
    <!--Let browser know website is optimized for mobile-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
</head>
<body id=\"app-layout\">

<!-- nav -->
<nav class=\"header\">
    <div class=\"nav-wrapper deep-purple darken-4\">
        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("raf_acarnet_address_homepage");
        echo "\" class=\"brand-logo pink-text left upper\">&nbsp;carnet adresses</a>
        <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
            <!-- Authentication Links -->
            ";
        // line 25
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 26
            echo "                <li class=\"white\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("raf_acarnet_address_dashboard");
            echo "\" class=\"black-text\"><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-sign-out\"></i> Logout</a></li>
            ";
        } else {
            // line 29
            echo "                <li><a class=\"upper\" href=\"/login\"><i class=\"fa fa-sign-in\"></i> Login</a></li>
                <li><a class=\"upper\" href=\"/register\"><i class=\"fa fa-user-plus\"></i> Register</a></li>
            ";
        }
        // line 32
        echo "        </ul>
    </div>
</nav>

";
        // line 36
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 37
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 38
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 39
                    echo "            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                ";
                    // line 40
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 45
        echo "
<div class=\"container\">
    ";
        // line 47
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 49
        echo "</div>


<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
<!--link file js personnel -->
<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/main.js"), "html", null, true);
        echo "\"></script>
<!-- Compiled and minified JavaScript -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js\"></script>
</body>
</html>


";
        
        $__internal_3913cacaf03cb8acae95c5f20e765b4a9f31b4b495f3b53c6d9601d6331497e7->leave($__internal_3913cacaf03cb8acae95c5f20e765b4a9f31b4b495f3b53c6d9601d6331497e7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_81a1f5c847a3efe92a78bf78741e20f8d1ee74a89778eeb37b1dccf9e17f6e9c = $this->env->getExtension("native_profiler");
        $__internal_81a1f5c847a3efe92a78bf78741e20f8d1ee74a89778eeb37b1dccf9e17f6e9c->enter($__internal_81a1f5c847a3efe92a78bf78741e20f8d1ee74a89778eeb37b1dccf9e17f6e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "App - ";
        
        $__internal_81a1f5c847a3efe92a78bf78741e20f8d1ee74a89778eeb37b1dccf9e17f6e9c->leave($__internal_81a1f5c847a3efe92a78bf78741e20f8d1ee74a89778eeb37b1dccf9e17f6e9c_prof);

    }

    // line 47
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42379416d686736f51c7508b39d4bdbbac8bd73069ffb8b818278a764ca3b8d6 = $this->env->getExtension("native_profiler");
        $__internal_42379416d686736f51c7508b39d4bdbbac8bd73069ffb8b818278a764ca3b8d6->enter($__internal_42379416d686736f51c7508b39d4bdbbac8bd73069ffb8b818278a764ca3b8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 48
        echo "    ";
        
        $__internal_42379416d686736f51c7508b39d4bdbbac8bd73069ffb8b818278a764ca3b8d6->leave($__internal_42379416d686736f51c7508b39d4bdbbac8bd73069ffb8b818278a764ca3b8d6_prof);

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
        return array (  163 => 48,  157 => 47,  145 => 5,  130 => 54,  123 => 49,  121 => 47,  117 => 45,  110 => 43,  101 => 40,  96 => 39,  91 => 38,  86 => 37,  84 => 36,  78 => 32,  73 => 29,  68 => 27,  61 => 26,  59 => 25,  53 => 22,  39 => 11,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}App - {% endblock %}</title>*/
/*     <!-- import icon font-awesome-->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">*/
/*     <!--Import Google Icon Font-->*/
/*     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*     <!--Importmain.css-->*/
/*     <link href="{{asset('public/css/main.css')}}" rel="stylesheet">*/
/*     <!-- Compiled and minified CSS -->*/
/*     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">*/
/*     <!--Let browser know website is optimized for mobile-->*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/* </head>*/
/* <body id="app-layout">*/
/* */
/* <!-- nav -->*/
/* <nav class="header">*/
/*     <div class="nav-wrapper deep-purple darken-4">*/
/*         <a href="{{ path('raf_acarnet_address_homepage') }}" class="brand-logo pink-text left upper">&nbsp;carnet adresses</a>*/
/*         <ul id="nav-mobile" class="right hide-on-med-and-down">*/
/*             <!-- Authentication Links -->*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 <li class="white"><a href="{{ path('raf_acarnet_address_dashboard') }}" class="black-text"><i class="fa fa-user"></i> {{  app.user.username }}</a></li>*/
/*                 <li><a href="{{ path('fos_user_security_logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>*/
/*             {% else %}*/
/*                 <li><a class="upper" href="/login"><i class="fa fa-sign-in"></i> Login</a></li>*/
/*                 <li><a class="upper" href="/register"><i class="fa fa-user-plus"></i> Register</a></li>*/
/*             {% endif %}*/
/*         </ul>*/
/*     </div>*/
/* </nav>*/
/* */
/* {% if app.request.hasPreviousSession %}*/
/*     {% for type, messages in app.session.flashbag.all() %}*/
/*         {% for message in messages %}*/
/*             <div class="flash-{{ type }}">*/
/*                 {{ message }}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* {% endif %}*/
/* */
/* <div class="container">*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/
/* */
/* */
/* <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/* <!--link file js personnel -->*/
/* <script src="{{asset('public/js/main.js')}}"></script>*/
/* <!-- Compiled and minified JavaScript -->*/
/* <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>*/
/* </body>*/
/* </html>*/
/* */
/* */
/* */
