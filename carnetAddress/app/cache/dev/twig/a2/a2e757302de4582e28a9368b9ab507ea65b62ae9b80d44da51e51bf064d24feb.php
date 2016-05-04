<?php

/* RAFAcarnetAddressBundle:Dashboard:index.html.twig */
class __TwigTemplate_b3b1ee967bcdf09bbe69be3210c70939ce46cd510cc65d8625b3f0eccd976c52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "RAFAcarnetAddressBundle:Dashboard:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9225c355be570e428823fd56a8f39881c4c588b2d771cdbaba64a01ee38553a6 = $this->env->getExtension("native_profiler");
        $__internal_9225c355be570e428823fd56a8f39881c4c588b2d771cdbaba64a01ee38553a6->enter($__internal_9225c355be570e428823fd56a8f39881c4c588b2d771cdbaba64a01ee38553a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RAFAcarnetAddressBundle:Dashboard:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9225c355be570e428823fd56a8f39881c4c588b2d771cdbaba64a01ee38553a6->leave($__internal_9225c355be570e428823fd56a8f39881c4c588b2d771cdbaba64a01ee38553a6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ef2e508c4629901a19971ceb332b6d94759720629c8428f24781ee8c63a2088 = $this->env->getExtension("native_profiler");
        $__internal_0ef2e508c4629901a19971ceb332b6d94759720629c8428f24781ee8c63a2088->enter($__internal_0ef2e508c4629901a19971ceb332b6d94759720629c8428f24781ee8c63a2088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "dashboard";
        
        $__internal_0ef2e508c4629901a19971ceb332b6d94759720629c8428f24781ee8c63a2088->leave($__internal_0ef2e508c4629901a19971ceb332b6d94759720629c8428f24781ee8c63a2088_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_274afcb8b749f340bc9724149853f4d0f90290a77cf113ed9b293767eff5995b = $this->env->getExtension("native_profiler");
        $__internal_274afcb8b749f340bc9724149853f4d0f90290a77cf113ed9b293767eff5995b->enter($__internal_274afcb8b749f340bc9724149853f4d0f90290a77cf113ed9b293767eff5995b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <div id=\"profile-page-header\" class=\"card\">
        <div class=\"card-image waves-effect waves-block waves-light\">
            <img class=\"activator\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/user-profile-bg.jpg"), "html", null, true);
        echo "\" height=\"300\" alt=\"user background\">
        </div>
        <figure class=\"card-profile-image\">
            <!--img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/avatar.png"), "html", null, true);
        echo "\" width=\"140\" height=\"140\" alt=\"profile image\" class=\"circle z-depth-2 responsive-img activator\"-->
        </figure>
        <div class=\"card-content\">
            <div class=\"row\">
                <div class=\"col s2 offset-s2\">
                    <h4 class=\"card-title grey-text text-darken-4\"></h4>
                    <p class=\"medium-small grey-text\">Project Manager</p>
                </div>
                <div class=\"col s2 center-align\">
                    <h4 class=\"card-title grey-text text-darken-4\">10+</h4>
                    <p class=\"medium-small grey-text\">Work Experience</p>
                </div>
                <div class=\"col s2 center-align\">
                    <h4 class=\"card-title grey-text text-darken-4\">6</h4>
                    <p class=\"medium-small grey-text\">Completed Projects</p>
                </div>
                <div class=\"col s2 center-align\">
                    <h4 class=\"card-title grey-text text-darken-4\">\$ 1,253,000</h4>
                    <p class=\"medium-small grey-text\">Busness Profit</p>
                </div>
                <div class=\"col s2 right-align\"><!-- button action -->
                    ";
        // line 33
        if (twig_test_empty((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")))) {
            // line 34
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("raf_acarnet_address_dashboard_create");
            echo "\" class=\"btn-floating  waves-effect green darken-2 right\"><!-- edit -->
                            <i class=\"fa fa-plus\"></i>
                        </a>
                    ";
        } else {
            // line 38
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("raf_acarnet_address_dashboard_destroy", array("id" => $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Vous etez sur de supprimez tous le compte?')\" class=\"btn-floating  waves-effect red darken-2 right\"><!-- delete -->
                        <i class=\"mdi-action-delete\"></i>
                    </a>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("raf_acarnet_address_dashboard_edit", array("id" => $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "id", array()))), "html", null, true);
            echo "\" class=\"btn-floating  waves-effect blue darken-2 right\"><!-- edit -->
                        <i class=\"mdi-content-create\"></i>
                    </a>
                    ";
        }
        // line 45
        echo "                    <a class=\"btn-floating activator waves-effect pink darken-2 right\"><!-- show -->
                        <i class=\"mdi-action-perm-identity\"></i>
                    </a>

                </div>
            </div>
        </div>
        <div class=\"card-reveal\">
            <p>
                <span class=\"card-title grey-text text-darken-4\">Roger Waters <i class=\"mdi-navigation-close right\"></i></span>
                <span><i class=\"mdi-action-perm-identity cyan-text text-darken-2\"></i> Project Manager</span>
            </p>

            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>

            <p><i class=\"mdi-action-perm-phone-msg cyan-text text-darken-2\"></i> +1 (612) 222 8989</p>
            <p><i class=\"mdi-communication-email cyan-text text-darken-2\"></i> mail@domain.com</p>
            <p><i class=\"mdi-social-cake cyan-text text-darken-2\"></i> 18th June 1990</p>
            <p><i class=\"mdi-device-airplanemode-on cyan-text text-darken-2\"></i> BAR - AUS</p>
        </div>
    </div>



";
        
        $__internal_274afcb8b749f340bc9724149853f4d0f90290a77cf113ed9b293767eff5995b->leave($__internal_274afcb8b749f340bc9724149853f4d0f90290a77cf113ed9b293767eff5995b_prof);

    }

    public function getTemplateName()
    {
        return "RAFAcarnetAddressBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 45,  105 => 41,  98 => 38,  90 => 34,  88 => 33,  64 => 12,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}dashboard{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div id="profile-page-header" class="card">*/
/*         <div class="card-image waves-effect waves-block waves-light">*/
/*             <img class="activator" src="{{ asset('public/img/user-profile-bg.jpg') }}" height="300" alt="user background">*/
/*         </div>*/
/*         <figure class="card-profile-image">*/
/*             <!--img src="{{ asset('public/img/avatar.png') }}" width="140" height="140" alt="profile image" class="circle z-depth-2 responsive-img activator"-->*/
/*         </figure>*/
/*         <div class="card-content">*/
/*             <div class="row">*/
/*                 <div class="col s2 offset-s2">*/
/*                     <h4 class="card-title grey-text text-darken-4"></h4>*/
/*                     <p class="medium-small grey-text">Project Manager</p>*/
/*                 </div>*/
/*                 <div class="col s2 center-align">*/
/*                     <h4 class="card-title grey-text text-darken-4">10+</h4>*/
/*                     <p class="medium-small grey-text">Work Experience</p>*/
/*                 </div>*/
/*                 <div class="col s2 center-align">*/
/*                     <h4 class="card-title grey-text text-darken-4">6</h4>*/
/*                     <p class="medium-small grey-text">Completed Projects</p>*/
/*                 </div>*/
/*                 <div class="col s2 center-align">*/
/*                     <h4 class="card-title grey-text text-darken-4">$ 1,253,000</h4>*/
/*                     <p class="medium-small grey-text">Busness Profit</p>*/
/*                 </div>*/
/*                 <div class="col s2 right-align"><!-- button action -->*/
/*                     {% if info is empty %}*/
/*                         <a href="{{ path('raf_acarnet_address_dashboard_create') }}" class="btn-floating  waves-effect green darken-2 right"><!-- edit -->*/
/*                             <i class="fa fa-plus"></i>*/
/*                         </a>*/
/*                     {% else %}*/
/*                     <a href="{{ path('raf_acarnet_address_dashboard_destroy', {'id':info.id}) }}" onclick="return confirm('Vous etez sur de supprimez tous le compte?')" class="btn-floating  waves-effect red darken-2 right"><!-- delete -->*/
/*                         <i class="mdi-action-delete"></i>*/
/*                     </a>*/
/*                     <a href="{{ path('raf_acarnet_address_dashboard_edit', {'id':info.id}) }}" class="btn-floating  waves-effect blue darken-2 right"><!-- edit -->*/
/*                         <i class="mdi-content-create"></i>*/
/*                     </a>*/
/*                     {% endif %}*/
/*                     <a class="btn-floating activator waves-effect pink darken-2 right"><!-- show -->*/
/*                         <i class="mdi-action-perm-identity"></i>*/
/*                     </a>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="card-reveal">*/
/*             <p>*/
/*                 <span class="card-title grey-text text-darken-4">Roger Waters <i class="mdi-navigation-close right"></i></span>*/
/*                 <span><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Project Manager</span>*/
/*             </p>*/
/* */
/*             <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>*/
/* */
/*             <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>*/
/*             <p><i class="mdi-communication-email cyan-text text-darken-2"></i> mail@domain.com</p>*/
/*             <p><i class="mdi-social-cake cyan-text text-darken-2"></i> 18th June 1990</p>*/
/*             <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i> BAR - AUS</p>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
