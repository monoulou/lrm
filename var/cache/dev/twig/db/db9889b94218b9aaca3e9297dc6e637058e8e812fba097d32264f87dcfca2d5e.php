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
        $__internal_8e0b7b6399ee69ca20b79affd62129b4d34687bc7aec749ba7f641a9d0a446ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0b7b6399ee69ca20b79affd62129b4d34687bc7aec749ba7f641a9d0a446ff->enter($__internal_8e0b7b6399ee69ca20b79affd62129b4d34687bc7aec749ba7f641a9d0a446ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:reset_content.html.twig"));

        $__internal_cfc803d57738d0fb9c6797fb1ce3c36d03e0d963a6dbc0f75c143d5b280dbc6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc803d57738d0fb9c6797fb1ce3c36d03e0d963a6dbc0f75c143d5b280dbc6a->enter($__internal_cfc803d57738d0fb9c6797fb1ce3c36d03e0d963a6dbc0f75c143d5b280dbc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:reset_content.html.twig"));

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
        
        $__internal_8e0b7b6399ee69ca20b79affd62129b4d34687bc7aec749ba7f641a9d0a446ff->leave($__internal_8e0b7b6399ee69ca20b79affd62129b4d34687bc7aec749ba7f641a9d0a446ff_prof);

        
        $__internal_cfc803d57738d0fb9c6797fb1ce3c36d03e0d963a6dbc0f75c143d5b280dbc6a->leave($__internal_cfc803d57738d0fb9c6797fb1ce3c36d03e0d963a6dbc0f75c143d5b280dbc6a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38f70165e1d8752625b7a6b797e6e3647c51616dd285e539b283effd767e1517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f70165e1d8752625b7a6b797e6e3647c51616dd285e539b283effd767e1517->enter($__internal_38f70165e1d8752625b7a6b797e6e3647c51616dd285e539b283effd767e1517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4bad0ebc31c26f77128222cfa5de9b10c79744c23c8add1c95163041d77a52a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bad0ebc31c26f77128222cfa5de9b10c79744c23c8add1c95163041d77a52a7->enter($__internal_4bad0ebc31c26f77128222cfa5de9b10c79744c23c8add1c95163041d77a52a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/reset_content.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_4bad0ebc31c26f77128222cfa5de9b10c79744c23c8add1c95163041d77a52a7->leave($__internal_4bad0ebc31c26f77128222cfa5de9b10c79744c23c8add1c95163041d77a52a7_prof);

        
        $__internal_38f70165e1d8752625b7a6b797e6e3647c51616dd285e539b283effd767e1517->leave($__internal_38f70165e1d8752625b7a6b797e6e3647c51616dd285e539b283effd767e1517_prof);

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
