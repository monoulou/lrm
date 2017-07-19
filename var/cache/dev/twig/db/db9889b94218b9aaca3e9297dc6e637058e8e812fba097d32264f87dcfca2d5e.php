<?php

/* MAUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_312b1b36f66244bbe4b2ac948616823f5dc28956d652591d69a65df0bd2b720d extends Twig_Template
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
        $__internal_945a1bf84b3fa260dd931c441199ad1aa73105103cbcf7715175dc2423d5b9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945a1bf84b3fa260dd931c441199ad1aa73105103cbcf7715175dc2423d5b9c6->enter($__internal_945a1bf84b3fa260dd931c441199ad1aa73105103cbcf7715175dc2423d5b9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:reset_content.html.twig"));

        $__internal_58eed9282a0207c8661a4edb5cf41b673438720fa9dfb05738158bee81960e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58eed9282a0207c8661a4edb5cf41b673438720fa9dfb05738158bee81960e9f->enter($__internal_58eed9282a0207c8661a4edb5cf41b673438720fa9dfb05738158bee81960e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:reset_content.html.twig"));

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
        
        $__internal_945a1bf84b3fa260dd931c441199ad1aa73105103cbcf7715175dc2423d5b9c6->leave($__internal_945a1bf84b3fa260dd931c441199ad1aa73105103cbcf7715175dc2423d5b9c6_prof);

        
        $__internal_58eed9282a0207c8661a4edb5cf41b673438720fa9dfb05738158bee81960e9f->leave($__internal_58eed9282a0207c8661a4edb5cf41b673438720fa9dfb05738158bee81960e9f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d213c7921b855e6348916051dfec74019fd2ef687567f7a5ca5f80650b0c51e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d213c7921b855e6348916051dfec74019fd2ef687567f7a5ca5f80650b0c51e->enter($__internal_7d213c7921b855e6348916051dfec74019fd2ef687567f7a5ca5f80650b0c51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e83ca0ddc6b5da9c9fdb82b96dd668af7f9bd7e7e133ec0a84c33628eca2b1fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e83ca0ddc6b5da9c9fdb82b96dd668af7f9bd7e7e133ec0a84c33628eca2b1fe->enter($__internal_e83ca0ddc6b5da9c9fdb82b96dd668af7f9bd7e7e133ec0a84c33628eca2b1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/reset_content.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_e83ca0ddc6b5da9c9fdb82b96dd668af7f9bd7e7e133ec0a84c33628eca2b1fe->leave($__internal_e83ca0ddc6b5da9c9fdb82b96dd668af7f9bd7e7e133ec0a84c33628eca2b1fe_prof);

        
        $__internal_7d213c7921b855e6348916051dfec74019fd2ef687567f7a5ca5f80650b0c51e->leave($__internal_7d213c7921b855e6348916051dfec74019fd2ef687567f7a5ca5f80650b0c51e_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Resetting:reset_content.html.twig";
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

", "MAUserBundle:Resetting:reset_content.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Resetting/reset_content.html.twig");
    }
}
