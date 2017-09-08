<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_895de07ad700f15ded3e458eb502aec2b97b7a8cfb5d8a44e0d21a7970e8b902 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22357e8a9c7797afbc64145bca5ce07dbd10b595652a8c26eca446e6314d436e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22357e8a9c7797afbc64145bca5ce07dbd10b595652a8c26eca446e6314d436e->enter($__internal_22357e8a9c7797afbc64145bca5ce07dbd10b595652a8c26eca446e6314d436e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_f877325938078556a1554a0f1ad6fefd26e79a870ea675915f79331873394c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f877325938078556a1554a0f1ad6fefd26e79a870ea675915f79331873394c71->enter($__internal_f877325938078556a1554a0f1ad6fefd26e79a870ea675915f79331873394c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_22357e8a9c7797afbc64145bca5ce07dbd10b595652a8c26eca446e6314d436e->leave($__internal_22357e8a9c7797afbc64145bca5ce07dbd10b595652a8c26eca446e6314d436e_prof);

        
        $__internal_f877325938078556a1554a0f1ad6fefd26e79a870ea675915f79331873394c71->leave($__internal_f877325938078556a1554a0f1ad6fefd26e79a870ea675915f79331873394c71_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e5c84ed5f6cc609a63cb51577327641cb13eea2ffb235e54f6f78acf75a6a4ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c84ed5f6cc609a63cb51577327641cb13eea2ffb235e54f6f78acf75a6a4ab->enter($__internal_e5c84ed5f6cc609a63cb51577327641cb13eea2ffb235e54f6f78acf75a6a4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_fe38792c1e7cdee80ffea13cdaabd6ef24510aa53c8383e96dab4a510274910e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe38792c1e7cdee80ffea13cdaabd6ef24510aa53c8383e96dab4a510274910e->enter($__internal_fe38792c1e7cdee80ffea13cdaabd6ef24510aa53c8383e96dab4a510274910e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_fe38792c1e7cdee80ffea13cdaabd6ef24510aa53c8383e96dab4a510274910e->leave($__internal_fe38792c1e7cdee80ffea13cdaabd6ef24510aa53c8383e96dab4a510274910e_prof);

        
        $__internal_e5c84ed5f6cc609a63cb51577327641cb13eea2ffb235e54f6f78acf75a6a4ab->leave($__internal_e5c84ed5f6cc609a63cb51577327641cb13eea2ffb235e54f6f78acf75a6a4ab_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_17bea146520d2424654f59aaada1a5b96d610336d5cc583988411093e81b4a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17bea146520d2424654f59aaada1a5b96d610336d5cc583988411093e81b4a1c->enter($__internal_17bea146520d2424654f59aaada1a5b96d610336d5cc583988411093e81b4a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_755bca21b8901d9ae0e65b4cd0630b9f968a7add2f383348f9686ac1f4fdfef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_755bca21b8901d9ae0e65b4cd0630b9f968a7add2f383348f9686ac1f4fdfef7->enter($__internal_755bca21b8901d9ae0e65b4cd0630b9f968a7add2f383348f9686ac1f4fdfef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_755bca21b8901d9ae0e65b4cd0630b9f968a7add2f383348f9686ac1f4fdfef7->leave($__internal_755bca21b8901d9ae0e65b4cd0630b9f968a7add2f383348f9686ac1f4fdfef7_prof);

        
        $__internal_17bea146520d2424654f59aaada1a5b96d610336d5cc583988411093e81b4a1c->leave($__internal_17bea146520d2424654f59aaada1a5b96d610336d5cc583988411093e81b4a1c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e29ad6b9d5b15bf708a0c3f7e721f529e35f55eeb0da53a3d359d38160e2fe17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e29ad6b9d5b15bf708a0c3f7e721f529e35f55eeb0da53a3d359d38160e2fe17->enter($__internal_e29ad6b9d5b15bf708a0c3f7e721f529e35f55eeb0da53a3d359d38160e2fe17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_723da09f4d28a94580e8333e01de87b735ebb5e015d4e4e1d59073bb9326abb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723da09f4d28a94580e8333e01de87b735ebb5e015d4e4e1d59073bb9326abb3->enter($__internal_723da09f4d28a94580e8333e01de87b735ebb5e015d4e4e1d59073bb9326abb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_723da09f4d28a94580e8333e01de87b735ebb5e015d4e4e1d59073bb9326abb3->leave($__internal_723da09f4d28a94580e8333e01de87b735ebb5e015d4e4e1d59073bb9326abb3_prof);

        
        $__internal_e29ad6b9d5b15bf708a0c3f7e721f529e35f55eeb0da53a3d359d38160e2fe17->leave($__internal_e29ad6b9d5b15bf708a0c3f7e721f529e35f55eeb0da53a3d359d38160e2fe17_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
