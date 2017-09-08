<?php

/* :email:email.txt.twig */
class __TwigTemplate_ad74fe1189ba55b9ffd934a958a8ab4393948957587f153e605eccb4d1f2fdaa extends Twig_Template
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
        $__internal_a11d53cb741b939206b0d88a243c114c7e17314c8d34d54834c57a4adf1a608c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11d53cb741b939206b0d88a243c114c7e17314c8d34d54834c57a4adf1a608c->enter($__internal_a11d53cb741b939206b0d88a243c114c7e17314c8d34d54834c57a4adf1a608c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":email:email.txt.twig"));

        $__internal_287781ee32f817d96e2fce8dd4b03864ac21e5d6d9158c09cd06cee52bb5cd4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_287781ee32f817d96e2fce8dd4b03864ac21e5d6d9158c09cd06cee52bb5cd4b->enter($__internal_287781ee32f817d96e2fce8dd4b03864ac21e5d6d9158c09cd06cee52bb5cd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":email:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a11d53cb741b939206b0d88a243c114c7e17314c8d34d54834c57a4adf1a608c->leave($__internal_a11d53cb741b939206b0d88a243c114c7e17314c8d34d54834c57a4adf1a608c_prof);

        
        $__internal_287781ee32f817d96e2fce8dd4b03864ac21e5d6d9158c09cd06cee52bb5cd4b->leave($__internal_287781ee32f817d96e2fce8dd4b03864ac21e5d6d9158c09cd06cee52bb5cd4b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_323cf313bcb17a5c710aa6e97ba871aabe297a74860e1ef8aa9022d81ad99579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323cf313bcb17a5c710aa6e97ba871aabe297a74860e1ef8aa9022d81ad99579->enter($__internal_323cf313bcb17a5c710aa6e97ba871aabe297a74860e1ef8aa9022d81ad99579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_14174ad9e44ab33f52305104ba76745f3bf83564d98c921a385d87f8016ebbec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14174ad9e44ab33f52305104ba76745f3bf83564d98c921a385d87f8016ebbec->enter($__internal_14174ad9e44ab33f52305104ba76745f3bf83564d98c921a385d87f8016ebbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_14174ad9e44ab33f52305104ba76745f3bf83564d98c921a385d87f8016ebbec->leave($__internal_14174ad9e44ab33f52305104ba76745f3bf83564d98c921a385d87f8016ebbec_prof);

        
        $__internal_323cf313bcb17a5c710aa6e97ba871aabe297a74860e1ef8aa9022d81ad99579->leave($__internal_323cf313bcb17a5c710aa6e97ba871aabe297a74860e1ef8aa9022d81ad99579_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_006fbe5de85fb956021e916b9984f3b59018b9edbbb2ef2697e21ffaefca974c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006fbe5de85fb956021e916b9984f3b59018b9edbbb2ef2697e21ffaefca974c->enter($__internal_006fbe5de85fb956021e916b9984f3b59018b9edbbb2ef2697e21ffaefca974c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_74adc5aaab47e99006c3b37f6a3d76d38881e864e7984eea7d8a5c68a526ee3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74adc5aaab47e99006c3b37f6a3d76d38881e864e7984eea7d8a5c68a526ee3c->enter($__internal_74adc5aaab47e99006c3b37f6a3d76d38881e864e7984eea7d8a5c68a526ee3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_74adc5aaab47e99006c3b37f6a3d76d38881e864e7984eea7d8a5c68a526ee3c->leave($__internal_74adc5aaab47e99006c3b37f6a3d76d38881e864e7984eea7d8a5c68a526ee3c_prof);

        
        $__internal_006fbe5de85fb956021e916b9984f3b59018b9edbbb2ef2697e21ffaefca974c->leave($__internal_006fbe5de85fb956021e916b9984f3b59018b9edbbb2ef2697e21ffaefca974c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_427ccbe76ab26c5086c5456fb5a4b0157aaeee2a34f6f626bc168cd4c6b82fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_427ccbe76ab26c5086c5456fb5a4b0157aaeee2a34f6f626bc168cd4c6b82fac->enter($__internal_427ccbe76ab26c5086c5456fb5a4b0157aaeee2a34f6f626bc168cd4c6b82fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ce6f9c72f8402f7db84058393de992fd84e38afb4f49d64375b18115794e52d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6f9c72f8402f7db84058393de992fd84e38afb4f49d64375b18115794e52d7->enter($__internal_ce6f9c72f8402f7db84058393de992fd84e38afb4f49d64375b18115794e52d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ce6f9c72f8402f7db84058393de992fd84e38afb4f49d64375b18115794e52d7->leave($__internal_ce6f9c72f8402f7db84058393de992fd84e38afb4f49d64375b18115794e52d7_prof);

        
        $__internal_427ccbe76ab26c5086c5456fb5a4b0157aaeee2a34f6f626bc168cd4c6b82fac->leave($__internal_427ccbe76ab26c5086c5456fb5a4b0157aaeee2a34f6f626bc168cd4c6b82fac_prof);

    }

    public function getTemplateName()
    {
        return ":email:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}", ":email:email.txt.twig", "C:\\wamp64\\www\\ligne_rh\\app/Resources\\views/email/email.txt.twig");
    }
}
