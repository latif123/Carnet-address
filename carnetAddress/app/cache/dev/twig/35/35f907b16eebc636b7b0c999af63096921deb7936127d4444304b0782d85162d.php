<?php

/* RAFAcarnetAddressBundle:Auth:login.html.twig */
class __TwigTemplate_32d62bb0ebad5b510b04036d5c68b8edb725b306ebf0aae10aadb47bfaceb336 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("login.html.twig", "RAFAcarnetAddressBundle:Auth:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9187f546a12a098740ec77710921c35fa9fef9fd6ac49a535dc05bcedd4a1ddf = $this->env->getExtension("native_profiler");
        $__internal_9187f546a12a098740ec77710921c35fa9fef9fd6ac49a535dc05bcedd4a1ddf->enter($__internal_9187f546a12a098740ec77710921c35fa9fef9fd6ac49a535dc05bcedd4a1ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RAFAcarnetAddressBundle:Auth:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9187f546a12a098740ec77710921c35fa9fef9fd6ac49a535dc05bcedd4a1ddf->leave($__internal_9187f546a12a098740ec77710921c35fa9fef9fd6ac49a535dc05bcedd4a1ddf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e58b46f738e79d21bd2be6805cccbc72b75bb9f1bd405d2841e70b3dd5603c4a = $this->env->getExtension("native_profiler");
        $__internal_e58b46f738e79d21bd2be6805cccbc72b75bb9f1bd405d2841e70b3dd5603c4a->enter($__internal_e58b46f738e79d21bd2be6805cccbc72b75bb9f1bd405d2841e70b3dd5603c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_e58b46f738e79d21bd2be6805cccbc72b75bb9f1bd405d2841e70b3dd5603c4a->leave($__internal_e58b46f738e79d21bd2be6805cccbc72b75bb9f1bd405d2841e70b3dd5603c4a_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_72020cd52e6614327ea8d8a8d9e7c30a09ab2b1bdfa53dc627c8624cf47c8e97 = $this->env->getExtension("native_profiler");
        $__internal_72020cd52e6614327ea8d8a8d9e7c30a09ab2b1bdfa53dc627c8624cf47c8e97->enter($__internal_72020cd52e6614327ea8d8a8d9e7c30a09ab2b1bdfa53dc627c8624cf47c8e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <div class=\"row \"><br><br><br><br>
        <div class=\"col s12 m4 offset-m4\">
            <div class=\"card-panel\">
                <h5 class=\"header2 upper center\">Login</h5>
                <div class=\"row\">
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "                        <div id=\"card-alert\" class=\"card green\">
                            <div class=\"card-content white-text\">
                                <p><i class=\"mdi-navigation-check\"></i> ";
            // line 15
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo ".</p>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                    <form class=\"s12\" action=\"\" method=\"post\">

                        <div class=\"row\"><!--password-->
                            <div class=\"input-field col s12\">
                                <i class=\"mdi-action-account-circle prefix\"></i>
                                <input id=\"email\" type=\"email\" class=\"validate\">
                                <label for=\"email\" class=\"\">E-mail</label>
                                <span class=\"help-block red-text\">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class=\"row \"><!--password-->
                            <div class=\"input-field col s12\">
                                <i class=\"mdi-action-lock-outline prefix\"></i>
                                <input id=\"password\" type=\"password\" class=\"validate\">
                                <label for=\"password\" class=\"\">Password</label>
                                <span class=\"help-block red-text\">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <!--div class=\"row\">
                            <div class=\"input-field col s12\">
                                {!!Form::checkbox('remember', 1, false,array('id'=>'remember'))!!}
                                {!!Form::label('remember', 'Remember Me')!!}
                            </div>
                        </div-->
                        <div class=\"row\"><!--button-->
                            <div class=\"input-field col s12\">
                                <button class=\"btn cyan waves-effect waves-light right\" type=\"submit\" name=\"action\">Submit
                                    <i class=\"mdi-content-send right\"></i>
                                </button>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"input-field col s12 center\">
                                <a class=\"\" href=\"#\">Forgot Your Password ?</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_72020cd52e6614327ea8d8a8d9e7c30a09ab2b1bdfa53dc627c8624cf47c8e97->leave($__internal_72020cd52e6614327ea8d8a8d9e7c30a09ab2b1bdfa53dc627c8624cf47c8e97_prof);

    }

    public function getTemplateName()
    {
        return "RAFAcarnetAddressBundle:Auth:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  69 => 15,  65 => 13,  61 => 12,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'login.html.twig' %}*/
/* */
/* {% block title %}Login{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="row "><br><br><br><br>*/
/*         <div class="col s12 m4 offset-m4">*/
/*             <div class="card-panel">*/
/*                 <h5 class="header2 upper center">Login</h5>*/
/*                 <div class="row">*/
/*                     {% for message in app.session.flashbag.get('info') %}*/
/*                         <div id="card-alert" class="card green">*/
/*                             <div class="card-content white-text">*/
/*                                 <p><i class="mdi-navigation-check"></i> {{ message }}.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                     <form class="s12" action="" method="post">*/
/* */
/*                         <div class="row"><!--password-->*/
/*                             <div class="input-field col s12">*/
/*                                 <i class="mdi-action-account-circle prefix"></i>*/
/*                                 <input id="email" type="email" class="validate">*/
/*                                 <label for="email" class="">E-mail</label>*/
/*                                 <span class="help-block red-text">*/
/*                                     <strong></strong>*/
/*                                 </span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row "><!--password-->*/
/*                             <div class="input-field col s12">*/
/*                                 <i class="mdi-action-lock-outline prefix"></i>*/
/*                                 <input id="password" type="password" class="validate">*/
/*                                 <label for="password" class="">Password</label>*/
/*                                 <span class="help-block red-text">*/
/*                                     <strong></strong>*/
/*                                 </span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!--div class="row">*/
/*                             <div class="input-field col s12">*/
/*                                 {!!Form::checkbox('remember', 1, false,array('id'=>'remember'))!!}*/
/*                                 {!!Form::label('remember', 'Remember Me')!!}*/
/*                             </div>*/
/*                         </div-->*/
/*                         <div class="row"><!--button-->*/
/*                             <div class="input-field col s12">*/
/*                                 <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit*/
/*                                     <i class="mdi-content-send right"></i>*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="input-field col s12 center">*/
/*                                 <a class="" href="#">Forgot Your Password ?</a>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
