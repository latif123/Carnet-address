<?php

/* login.html.twig */
class __TwigTemplate_7cbba642b6e0bb0887b79845f1b91b88f43737f472a1b4c110cedfbfef94c809 extends Twig_Template
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
        $__internal_49959e7bbfa3caa0ea61aaed9de44319a088144ae643a44bd32d8f562196a381 = $this->env->getExtension("native_profiler");
        $__internal_49959e7bbfa3caa0ea61aaed9de44319a088144ae643a44bd32d8f562196a381->enter($__internal_49959e7bbfa3caa0ea61aaed9de44319a088144ae643a44bd32d8f562196a381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

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

            <li><a class=\"upper\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("raf_acarnet_address_login");
        echo "\"><i class=\"fa fa-sign-in\"></i> Login</a></li>
            <li><a class=\"upper\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("raf_acarnet_address_register");
        echo "\"><i class=\"fa fa-user-plus\"></i> Register</a></li>

            <!--li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                     <span class=\"caret\"></span>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"#\"><i class=\"fa fa-btn fa-sign-out\"></i>Logout</a></li>
                </ul>
            </li-->

        </ul>
    </div>
</nav>


<div class=\"container\"><!-- block content -->
    ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 46
        echo "</div>


<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
<!--link file js personnel -->
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/main.js"), "html", null, true);
        echo "\"></script>
<!-- Compiled and minified JavaScript -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js\"></script>
</body>
</html>";
        
        $__internal_49959e7bbfa3caa0ea61aaed9de44319a088144ae643a44bd32d8f562196a381->leave($__internal_49959e7bbfa3caa0ea61aaed9de44319a088144ae643a44bd32d8f562196a381_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa653fa76f3f6e4669b777dce6684a2be1ec2e8b4eb08c832534245c999fb054 = $this->env->getExtension("native_profiler");
        $__internal_aa653fa76f3f6e4669b777dce6684a2be1ec2e8b4eb08c832534245c999fb054->enter($__internal_aa653fa76f3f6e4669b777dce6684a2be1ec2e8b4eb08c832534245c999fb054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "App - ";
        
        $__internal_aa653fa76f3f6e4669b777dce6684a2be1ec2e8b4eb08c832534245c999fb054->leave($__internal_aa653fa76f3f6e4669b777dce6684a2be1ec2e8b4eb08c832534245c999fb054_prof);

    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        $__internal_0cc202abb62cb1ad306553c64dd21fcb5c258459549220e1e029d0bdd5ddb099 = $this->env->getExtension("native_profiler");
        $__internal_0cc202abb62cb1ad306553c64dd21fcb5c258459549220e1e029d0bdd5ddb099->enter($__internal_0cc202abb62cb1ad306553c64dd21fcb5c258459549220e1e029d0bdd5ddb099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_0cc202abb62cb1ad306553c64dd21fcb5c258459549220e1e029d0bdd5ddb099->leave($__internal_0cc202abb62cb1ad306553c64dd21fcb5c258459549220e1e029d0bdd5ddb099_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 45,  106 => 5,  94 => 51,  87 => 46,  85 => 45,  64 => 27,  60 => 26,  53 => 22,  39 => 11,  30 => 5,  24 => 1,);
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
/* */
/*             <li><a class="upper" href="{{ path('raf_acarnet_address_login') }}"><i class="fa fa-sign-in"></i> Login</a></li>*/
/*             <li><a class="upper" href="{{ path('raf_acarnet_address_register') }}"><i class="fa fa-user-plus"></i> Register</a></li>*/
/* */
/*             <!--li class="dropdown">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">*/
/*                      <span class="caret"></span>*/
/*                 </a>*/
/* */
/*                 <ul class="dropdown-menu" role="menu">*/
/*                     <li><a href="#"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>*/
/*                 </ul>*/
/*             </li-->*/
/* */
/*         </ul>*/
/*     </div>*/
/* </nav>*/
/* */
/* */
/* <div class="container"><!-- block content -->*/
/*     {% block content %} {% endblock %}*/
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
