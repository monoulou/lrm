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
        $__internal_90dfb71493a023a3d67304020a5e71a8a2148db96b1be6974dc4884cd3d7da38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90dfb71493a023a3d67304020a5e71a8a2148db96b1be6974dc4884cd3d7da38->enter($__internal_90dfb71493a023a3d67304020a5e71a8a2148db96b1be6974dc4884cd3d7da38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_0c50983594e128f4b88531037689b27d8071a2c9978c05adc1000ccc87a867ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c50983594e128f4b88531037689b27d8071a2c9978c05adc1000ccc87a867ea->enter($__internal_0c50983594e128f4b88531037689b27d8071a2c9978c05adc1000ccc87a867ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_90dfb71493a023a3d67304020a5e71a8a2148db96b1be6974dc4884cd3d7da38->leave($__internal_90dfb71493a023a3d67304020a5e71a8a2148db96b1be6974dc4884cd3d7da38_prof);

        
        $__internal_0c50983594e128f4b88531037689b27d8071a2c9978c05adc1000ccc87a867ea->leave($__internal_0c50983594e128f4b88531037689b27d8071a2c9978c05adc1000ccc87a867ea_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_82d524f736d99487b43680f9fe1c78bbd93d41527307065537992d832117e489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d524f736d99487b43680f9fe1c78bbd93d41527307065537992d832117e489->enter($__internal_82d524f736d99487b43680f9fe1c78bbd93d41527307065537992d832117e489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_535a0c3b9477b68fde936629abf7bd5e6c976e799aaf759496dd69f9bd88e84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535a0c3b9477b68fde936629abf7bd5e6c976e799aaf759496dd69f9bd88e84b->enter($__internal_535a0c3b9477b68fde936629abf7bd5e6c976e799aaf759496dd69f9bd88e84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_535a0c3b9477b68fde936629abf7bd5e6c976e799aaf759496dd69f9bd88e84b->leave($__internal_535a0c3b9477b68fde936629abf7bd5e6c976e799aaf759496dd69f9bd88e84b_prof);

        
        $__internal_82d524f736d99487b43680f9fe1c78bbd93d41527307065537992d832117e489->leave($__internal_82d524f736d99487b43680f9fe1c78bbd93d41527307065537992d832117e489_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9ebea82dd66dc22d37c0576445b0b6a61ba699f9f14c03aa52f780e43a10ca76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ebea82dd66dc22d37c0576445b0b6a61ba699f9f14c03aa52f780e43a10ca76->enter($__internal_9ebea82dd66dc22d37c0576445b0b6a61ba699f9f14c03aa52f780e43a10ca76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2a0a6ed0c3e48c8c3ea27dc0e84189fe8df3f0d9e9a5d9ee07e57205f2c2413d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0a6ed0c3e48c8c3ea27dc0e84189fe8df3f0d9e9a5d9ee07e57205f2c2413d->enter($__internal_2a0a6ed0c3e48c8c3ea27dc0e84189fe8df3f0d9e9a5d9ee07e57205f2c2413d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2a0a6ed0c3e48c8c3ea27dc0e84189fe8df3f0d9e9a5d9ee07e57205f2c2413d->leave($__internal_2a0a6ed0c3e48c8c3ea27dc0e84189fe8df3f0d9e9a5d9ee07e57205f2c2413d_prof);

        
        $__internal_9ebea82dd66dc22d37c0576445b0b6a61ba699f9f14c03aa52f780e43a10ca76->leave($__internal_9ebea82dd66dc22d37c0576445b0b6a61ba699f9f14c03aa52f780e43a10ca76_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d4bb336a63f250394fdf27be41e001d8c87733a91f277aeafda3dafc743635a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4bb336a63f250394fdf27be41e001d8c87733a91f277aeafda3dafc743635a1->enter($__internal_d4bb336a63f250394fdf27be41e001d8c87733a91f277aeafda3dafc743635a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_a994c0be2f9c43e7e10da2845dcf64dffd911c5981491351abf6c0a9d8f375da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a994c0be2f9c43e7e10da2845dcf64dffd911c5981491351abf6c0a9d8f375da->enter($__internal_a994c0be2f9c43e7e10da2845dcf64dffd911c5981491351abf6c0a9d8f375da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a994c0be2f9c43e7e10da2845dcf64dffd911c5981491351abf6c0a9d8f375da->leave($__internal_a994c0be2f9c43e7e10da2845dcf64dffd911c5981491351abf6c0a9d8f375da_prof);

        
        $__internal_d4bb336a63f250394fdf27be41e001d8c87733a91f277aeafda3dafc743635a1->leave($__internal_d4bb336a63f250394fdf27be41e001d8c87733a91f277aeafda3dafc743635a1_prof);

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
