<?php

/* @MAUser/Resetting/reset_content.html.twig */
class __TwigTemplate_64480768a4500891988cf9b4626aca0a38b0d9cea9926f62b4b34c2255f0ae06 extends Twig_Template
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
        $__internal_88f06620a2192d634ad12bc5da3eb214e60c452adb8caa7c4ab5fc06fa6165b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88f06620a2192d634ad12bc5da3eb214e60c452adb8caa7c4ab5fc06fa6165b1->enter($__internal_88f06620a2192d634ad12bc5da3eb214e60c452adb8caa7c4ab5fc06fa6165b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/reset_content.html.twig"));

        $__internal_781283480079e51690a21042d3151a53504eacd002e434b26733e0f749f74b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781283480079e51690a21042d3151a53504eacd002e434b26733e0f749f74b2d->enter($__internal_781283480079e51690a21042d3151a53504eacd002e434b26733e0f749f74b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "
<div class=\"container-fluid\" id=\"reset_container\">
    <div class=\"row\">
        <h3 id=\"reset_title\">CONFIGURATION DU MOT DE PASSE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
    </div>
    <div class=\"row\">
        <div class=\"col-lg-3\" id=\"form_box_reset\">
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div>
                <input type=\"submit\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>

    </div>
</div>

";
        
        $__internal_88f06620a2192d634ad12bc5da3eb214e60c452adb8caa7c4ab5fc06fa6165b1->leave($__internal_88f06620a2192d634ad12bc5da3eb214e60c452adb8caa7c4ab5fc06fa6165b1_prof);

        
        $__internal_781283480079e51690a21042d3151a53504eacd002e434b26733e0f749f74b2d->leave($__internal_781283480079e51690a21042d3151a53504eacd002e434b26733e0f749f74b2d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_96dbbc59ff5274c3a329b2a03261f655f98cea04fa07af87b473de2f81af2aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96dbbc59ff5274c3a329b2a03261f655f98cea04fa07af87b473de2f81af2aa2->enter($__internal_96dbbc59ff5274c3a329b2a03261f655f98cea04fa07af87b473de2f81af2aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_52022349c22da7962906250a3147b8f033fe674816cd014c846f48b40d89569b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52022349c22da7962906250a3147b8f033fe674816cd014c846f48b40d89569b->enter($__internal_52022349c22da7962906250a3147b8f033fe674816cd014c846f48b40d89569b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/reset_content.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_52022349c22da7962906250a3147b8f033fe674816cd014c846f48b40d89569b->leave($__internal_52022349c22da7962906250a3147b8f033fe674816cd014c846f48b40d89569b_prof);

        
        $__internal_96dbbc59ff5274c3a329b2a03261f655f98cea04fa07af87b473de2f81af2aa2->leave($__internal_96dbbc59ff5274c3a329b2a03261f655f98cea04fa07af87b473de2f81af2aa2_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Resetting/reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 4,  71 => 3,  54 => 18,  49 => 16,  44 => 14,  40 => 13,  31 => 6,  29 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% block stylesheets %}
    <link href=\"{{ asset ('css/reset_content.css') }}\" rel='stylesheet' type='text/css' />
{% endblock %}

<div class=\"container-fluid\" id=\"reset_container\">
    <div class=\"row\">
        <h3 id=\"reset_title\">CONFIGURATION DU MOT DE PASSE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
    </div>
    <div class=\"row\">
        <div class=\"col-lg-3\" id=\"form_box_reset\">
            {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
            {{ form_widget(form) }}
            <div>
                <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
            </div>
            {{ form_end(form) }}
        </div>

    </div>
</div>

", "@MAUser/Resetting/reset_content.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Resetting\\reset_content.html.twig");
    }
}
