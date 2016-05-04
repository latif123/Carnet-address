<?php

/* RAFAcarnetAddressBundle:Dashboard:create.html.twig */
class __TwigTemplate_36d3f273d6611ed30316db25deb5f2d7073f15e333fa8e07297704c64806d8e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "RAFAcarnetAddressBundle:Dashboard:create.html.twig", 1);
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
        $__internal_7d30d858ea47f61f0f2f9ec09b6283dc13d8166fb0beb211be5a1dbe9f8700b8 = $this->env->getExtension("native_profiler");
        $__internal_7d30d858ea47f61f0f2f9ec09b6283dc13d8166fb0beb211be5a1dbe9f8700b8->enter($__internal_7d30d858ea47f61f0f2f9ec09b6283dc13d8166fb0beb211be5a1dbe9f8700b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RAFAcarnetAddressBundle:Dashboard:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d30d858ea47f61f0f2f9ec09b6283dc13d8166fb0beb211be5a1dbe9f8700b8->leave($__internal_7d30d858ea47f61f0f2f9ec09b6283dc13d8166fb0beb211be5a1dbe9f8700b8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d48f6615d6a64973af39004dcca507b324187dcbd28c5d4e9f666253683be2f8 = $this->env->getExtension("native_profiler");
        $__internal_d48f6615d6a64973af39004dcca507b324187dcbd28c5d4e9f666253683be2f8->enter($__internal_d48f6615d6a64973af39004dcca507b324187dcbd28c5d4e9f666253683be2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "dashboard";
        
        $__internal_d48f6615d6a64973af39004dcca507b324187dcbd28c5d4e9f666253683be2f8->leave($__internal_d48f6615d6a64973af39004dcca507b324187dcbd28c5d4e9f666253683be2f8_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_f07166c58410b8cd1a0104c37bdda89aed93d6bb4373db626273bb218545cc40 = $this->env->getExtension("native_profiler");
        $__internal_f07166c58410b8cd1a0104c37bdda89aed93d6bb4373db626273bb218545cc40->enter($__internal_f07166c58410b8cd1a0104c37bdda89aed93d6bb4373db626273bb218545cc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <div class=\"row \"><br><br>
        <div class=\"col s12 m8 offset-m2\">
            <div class=\"card-panel\">
                <h5 class=\"header2 upper center\">Create Informations</h5>
                <div class=\"row\">

                    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                        <div class=\"row hide\"><!-- name-->
                            <div class=\"input-field col s12\">
                                <i class=\"mdi-action-account-circle prefix\"></i>
                                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'widget');
        echo "
                                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'label', array("label" => "User"));
        echo "
                                <span class=\"help-block red-text\">
                                    <strong>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'errors');
        echo "</strong>
                                </span>
                            </div>
                        </div>
                        <div class=\"row\"><!-- name-->
                            <div class=\"input-field col s6\">
                                <i class=\"mdi-action-account-circle prefix\"></i>
                                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "
                                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label', array("label" => "First name"));
        echo "
                                <span class=\"help-block red-text\">
                                    <strong>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "</strong>
                                </span>
                            </div>
                            <div class=\"input-field col s6\">
                                <i class=\"mdi-action-account-circle prefix\"></i>
                                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget');
        echo "
                                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'label', array("label" => "Last name"));
        echo "
                                <span class=\"help-block red-text\">
                                    <strong>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "</strong>
                                </span>
                            </div>
                        </div>
                        <div class=\"row\"><!-- adresse-->
                            <div class=\"input-field col s6\">
                                <i class=\"mdi-maps-place prefix\"></i>
                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget');
        echo "
                                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'label', array("label" => "Address"));
        echo "
                                <span class=\"help-block red-text\">
                                    <strong>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'errors');
        echo "</strong>
                                </span>
                            </div>
                            <!-- phone-->
                            <div class=\"input-field col s6\">
                                <i class=\"mdi-hardware-smartphone prefix\"></i>
                                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "
                                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label', array("label" => "Phone"));
        echo "
                                <span class=\"help-block red-text\">
                                    <strong>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "</strong>
                                </span>
                            </div>
                        </div>
                        <div class=\"row\"><!-- website-->
                            <div class=\"input-field col s6\">
                                <i class=\"mdi-editor-insert-link prefix\"></i>
                                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'widget');
        echo "
                                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'label', array("label" => "Website"));
        echo "
                                <span class=\"help-block red-text\">
                                    <strong>";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'errors');
        echo "</strong>
                                </span>
                            </div>
                        </div>
                        <div class=\"row\"><!--button-->
                            <div class=\"input-field col s12\">
                                <button class=\"btn cyan waves-effect waves-light right\" type=\"submit\" name=\"action\">Submit
                                    <i class=\"mdi-content-send right\"></i>
                                </button>
                            </div>
                        </div>

                    ";
        // line 80
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_f07166c58410b8cd1a0104c37bdda89aed93d6bb4373db626273bb218545cc40->leave($__internal_f07166c58410b8cd1a0104c37bdda89aed93d6bb4373db626273bb218545cc40_prof);

    }

    public function getTemplateName()
    {
        return "RAFAcarnetAddressBundle:Dashboard:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 80,  171 => 68,  166 => 66,  162 => 65,  152 => 58,  147 => 56,  143 => 55,  134 => 49,  129 => 47,  125 => 46,  115 => 39,  110 => 37,  106 => 36,  98 => 31,  93 => 29,  89 => 28,  79 => 21,  74 => 19,  70 => 18,  62 => 13,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}dashboard{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="row "><br><br>*/
/*         <div class="col s12 m8 offset-m2">*/
/*             <div class="card-panel">*/
/*                 <h5 class="header2 upper center">Create Informations</h5>*/
/*                 <div class="row">*/
/* */
/*                     {{ form_start(form) }}*/
/* */
/*                         <div class="row hide"><!-- name-->*/
/*                             <div class="input-field col s12">*/
/*                                 <i class="mdi-action-account-circle prefix"></i>*/
/*                                 {{ form_widget(form.user) }}*/
/*                                 {{ form_label(form.user, "User") }}*/
/*                                 <span class="help-block red-text">*/
/*                                     <strong>{{ form_errors(form.user) }}</strong>*/
/*                                 </span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row"><!-- name-->*/
/*                             <div class="input-field col s6">*/
/*                                 <i class="mdi-action-account-circle prefix"></i>*/
/*                                 {{ form_widget(form.firstname) }}*/
/*                                 {{ form_label(form.firstname, 'First name') }}*/
/*                                 <span class="help-block red-text">*/
/*                                     <strong>{{ form_errors(form.firstname) }}</strong>*/
/*                                 </span>*/
/*                             </div>*/
/*                             <div class="input-field col s6">*/
/*                                 <i class="mdi-action-account-circle prefix"></i>*/
/*                                 {{ form_widget(form.lastname) }}*/
/*                                 {{ form_label(form.lastname, 'Last name') }}*/
/*                                 <span class="help-block red-text">*/
/*                                     <strong>{{ form_errors(form.lastname) }}</strong>*/
/*                                 </span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row"><!-- adresse-->*/
/*                             <div class="input-field col s6">*/
/*                                 <i class="mdi-maps-place prefix"></i>*/
/*                                 {{ form_widget(form.address) }}*/
/*                                 {{ form_label(form.address, 'Address') }}*/
/*                                 <span class="help-block red-text">*/
/*                                     <strong>{{ form_errors(form.address) }}</strong>*/
/*                                 </span>*/
/*                             </div>*/
/*                             <!-- phone-->*/
/*                             <div class="input-field col s6">*/
/*                                 <i class="mdi-hardware-smartphone prefix"></i>*/
/*                                 {{ form_widget(form.phone) }}*/
/*                                 {{ form_label(form.phone, 'Phone') }}*/
/*                                 <span class="help-block red-text">*/
/*                                     <strong>{{ form_errors(form.phone) }}</strong>*/
/*                                 </span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row"><!-- website-->*/
/*                             <div class="input-field col s6">*/
/*                                 <i class="mdi-editor-insert-link prefix"></i>*/
/*                                 {{ form_widget(form.website) }}*/
/*                                 {{ form_label(form.website, 'Website') }}*/
/*                                 <span class="help-block red-text">*/
/*                                     <strong>{{ form_errors(form.website) }}</strong>*/
/*                                 </span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row"><!--button-->*/
/*                             <div class="input-field col s12">*/
/*                                 <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit*/
/*                                     <i class="mdi-content-send right"></i>*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
