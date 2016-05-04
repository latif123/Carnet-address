<?php

/* base.html.twig */
class __TwigTemplate_7d06b47b75cd7ec6634435788808d08aace99d29f713925af1b458756447ed33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f97c95a7ff10d3aaa7ecdb4ca461420748a839e7e03a92d0e63d84c5605e99bf = $this->env->getExtension("native_profiler");
        $__internal_f97c95a7ff10d3aaa7ecdb4ca461420748a839e7e03a92d0e63d84c5605e99bf->enter($__internal_f97c95a7ff10d3aaa7ecdb4ca461420748a839e7e03a92d0e63d84c5605e99bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Import font icon font-awesome-->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
    <!--Import Google Icon Font-->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900' rel='stylesheet' type='text/css'>
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <!--Import materialize.css-->
    <!-- CDN Angular js  -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.3.13/angular.min.js\"></script>
    <!-- Compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css\">
    <!-- Import CSS file -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/main.css"), "html", null, true);
        echo "\">
    <!--Let browser know website is optimized for mobile-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
</head>
<body ng-app>

<nav class=\"header\">
    <div class=\"nav-wrapper deep-purple darken-4\">
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("raf_acarnet_address_homepage");
        echo "\" class=\"brand-logo pink-text left upper\">&nbsp;carnet adresses</a>
        <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
            <!-- Authentication Links -->
            ";
        // line 28
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 29
            echo "                <li class=\"white\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("raf_acarnet_address_dashboard");
            echo "\" class=\"black-text\"><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-sign-out\"></i> Logout</a></li>
            ";
        } else {
            // line 32
            echo "                <li><a class=\"upper\" href=\"/login\"><i class=\"fa fa-sign-in\"></i> Login</a></li>
                <li><a class=\"upper\" href=\"/register\"><i class=\"fa fa-user-plus\"></i> Register</a></li>
            ";
        }
        // line 35
        echo "        </ul>
    </div>
</nav>

";
        // line 39
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 40
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 41
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 42
                    echo "            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                ";
                    // line 43
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 48
        echo "
<div class=\"container\"><!-- the block content -->
    <br><br><br>
    ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "</div>

<!--footer class=\"page-footer deep-purple darken-1\">
    <div class=\"footer-copyright deep-purple darken-2\">
        <div class=\"container\">
            © ";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Copyright - BELKHIRIA NAJIB - App Carnet Address
        </div>
    </div>
</footer-->
<!-- CDN jQuery -->
<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
<!-- import javascript file -->
<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/main.js"), "html", null, true);
        echo "\"></script>
<!-- Compiled and minified JavaScript -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js\"></script>

</body>
</html>



";
        
        $__internal_f97c95a7ff10d3aaa7ecdb4ca461420748a839e7e03a92d0e63d84c5605e99bf->leave($__internal_f97c95a7ff10d3aaa7ecdb4ca461420748a839e7e03a92d0e63d84c5605e99bf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d89d68857d076e614765a16e77c7cd42c82578e633b4e715a6781f5427f03de = $this->env->getExtension("native_profiler");
        $__internal_3d89d68857d076e614765a16e77c7cd42c82578e633b4e715a6781f5427f03de->enter($__internal_3d89d68857d076e614765a16e77c7cd42c82578e633b4e715a6781f5427f03de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "App";
        
        $__internal_3d89d68857d076e614765a16e77c7cd42c82578e633b4e715a6781f5427f03de->leave($__internal_3d89d68857d076e614765a16e77c7cd42c82578e633b4e715a6781f5427f03de_prof);

    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        $__internal_40a5c935c97d33cf9670914c777715e9845eacfa2c32d880641b02b64654da0e = $this->env->getExtension("native_profiler");
        $__internal_40a5c935c97d33cf9670914c777715e9845eacfa2c32d880641b02b64654da0e->enter($__internal_40a5c935c97d33cf9670914c777715e9845eacfa2c32d880641b02b64654da0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_40a5c935c97d33cf9670914c777715e9845eacfa2c32d880641b02b64654da0e->leave($__internal_40a5c935c97d33cf9670914c777715e9845eacfa2c32d880641b02b64654da0e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 51,  161 => 5,  144 => 64,  134 => 57,  127 => 52,  125 => 51,  120 => 48,  113 => 46,  104 => 43,  99 => 42,  94 => 41,  89 => 40,  87 => 39,  81 => 35,  76 => 32,  71 => 30,  64 => 29,  62 => 28,  56 => 25,  45 => 17,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}App{% endblock %}</title>*/
/*     <!-- Import font icon font-awesome-->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">*/
/*     <!--Import Google Icon Font-->*/
/*     <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900' rel='stylesheet' type='text/css'>*/
/*     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*     <!--Import materialize.css-->*/
/*     <!-- CDN Angular js  -->*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.13/angular.min.js"></script>*/
/*     <!-- Compiled and minified CSS -->*/
/*     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">*/
/*     <!-- Import CSS file -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('public/css/main.css') }}">*/
/*     <!--Let browser know website is optimized for mobile-->*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/* </head>*/
/* <body ng-app>*/
/* */
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
/* <div class="container"><!-- the block content -->*/
/*     <br><br><br>*/
/*     {% block content %} {% endblock %}*/
/* </div>*/
/* */
/* <!--footer class="page-footer deep-purple darken-1">*/
/*     <div class="footer-copyright deep-purple darken-2">*/
/*         <div class="container">*/
/*             © {{ "now"|date('Y') }} Copyright - BELKHIRIA NAJIB - App Carnet Address*/
/*         </div>*/
/*     </div>*/
/* </footer-->*/
/* <!-- CDN jQuery -->*/
/* <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/* <!-- import javascript file -->*/
/* <script src="{{ asset('public/js/main.js') }}"></script>*/
/* <!-- Compiled and minified JavaScript -->*/
/* <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>*/
/* */
/* </body>*/
/* </html>*/
/* */
/* */
/* */
/* */
