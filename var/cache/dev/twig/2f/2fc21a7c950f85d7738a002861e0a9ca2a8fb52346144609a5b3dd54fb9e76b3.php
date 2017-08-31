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
        $__internal_bd2767e2248031383676ef85cc86d2e974b29f722cc42823e4ff78e421ebb537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd2767e2248031383676ef85cc86d2e974b29f722cc42823e4ff78e421ebb537->enter($__internal_bd2767e2248031383676ef85cc86d2e974b29f722cc42823e4ff78e421ebb537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/reset_content.html.twig"));

        $__internal_5377b29febb12ecd3a2fe3b8a2ef753a8ccb195ad58dd3c09fba1cc170ac6019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5377b29febb12ecd3a2fe3b8a2ef753a8ccb195ad58dd3c09fba1cc170ac6019->enter($__internal_5377b29febb12ecd3a2fe3b8a2ef753a8ccb195ad58dd3c09fba1cc170ac6019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/reset_content.html.twig"));

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
        
        $__internal_bd2767e2248031383676ef85cc86d2e974b29f722cc42823e4ff78e421ebb537->leave($__internal_bd2767e2248031383676ef85cc86d2e974b29f722cc42823e4ff78e421ebb537_prof);

        
        $__internal_5377b29febb12ecd3a2fe3b8a2ef753a8ccb195ad58dd3c09fba1cc170ac6019->leave($__internal_5377b29febb12ecd3a2fe3b8a2ef753a8ccb195ad58dd3c09fba1cc170ac6019_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ed313f5751208180ff451fadafb570a489bec39b09f3ca7f0c63971d8637aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ed313f5751208180ff451fadafb570a489bec39b09f3ca7f0c63971d8637aa0->enter($__internal_2ed313f5751208180ff451fadafb570a489bec39b09f3ca7f0c63971d8637aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_08790ef061387641cf9593b452848889bae0c72b6f06955e8c8e7e50681bb46e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08790ef061387641cf9593b452848889bae0c72b6f06955e8c8e7e50681bb46e->enter($__internal_08790ef061387641cf9593b452848889bae0c72b6f06955e8c8e7e50681bb46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/reset_content.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_08790ef061387641cf9593b452848889bae0c72b6f06955e8c8e7e50681bb46e->leave($__internal_08790ef061387641cf9593b452848889bae0c72b6f06955e8c8e7e50681bb46e_prof);

        
        $__internal_2ed313f5751208180ff451fadafb570a489bec39b09f3ca7f0c63971d8637aa0->leave($__internal_2ed313f5751208180ff451fadafb570a489bec39b09f3ca7f0c63971d8637aa0_prof);

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
