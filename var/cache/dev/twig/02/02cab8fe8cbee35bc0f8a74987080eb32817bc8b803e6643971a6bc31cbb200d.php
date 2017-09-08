<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_eb92d11bb7a962bba0ece8998d894640e3aebbdfbc7d7985ba426f75c182643a extends Twig_Template
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
        $__internal_d8abe77b2e22f396ac9bb27763ed2bf113625df3c0bbcb6df54770cb67c21efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8abe77b2e22f396ac9bb27763ed2bf113625df3c0bbcb6df54770cb67c21efb->enter($__internal_d8abe77b2e22f396ac9bb27763ed2bf113625df3c0bbcb6df54770cb67c21efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_2946b3b54b70ffb1dd14be4fd2defafadac7bdc6afb093facb106bd43abc4325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2946b3b54b70ffb1dd14be4fd2defafadac7bdc6afb093facb106bd43abc4325->enter($__internal_2946b3b54b70ffb1dd14be4fd2defafadac7bdc6afb093facb106bd43abc4325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d8abe77b2e22f396ac9bb27763ed2bf113625df3c0bbcb6df54770cb67c21efb->leave($__internal_d8abe77b2e22f396ac9bb27763ed2bf113625df3c0bbcb6df54770cb67c21efb_prof);

        
        $__internal_2946b3b54b70ffb1dd14be4fd2defafadac7bdc6afb093facb106bd43abc4325->leave($__internal_2946b3b54b70ffb1dd14be4fd2defafadac7bdc6afb093facb106bd43abc4325_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2d681c0c7f287f199c24e34d60b37806ece90f6026ebb48c24008f691aa8a909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d681c0c7f287f199c24e34d60b37806ece90f6026ebb48c24008f691aa8a909->enter($__internal_2d681c0c7f287f199c24e34d60b37806ece90f6026ebb48c24008f691aa8a909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_b0f25ae5c4b286c1fe469d3e50bc5a8b702360876025ec9f70636cab1209a61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f25ae5c4b286c1fe469d3e50bc5a8b702360876025ec9f70636cab1209a61a->enter($__internal_b0f25ae5c4b286c1fe469d3e50bc5a8b702360876025ec9f70636cab1209a61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_b0f25ae5c4b286c1fe469d3e50bc5a8b702360876025ec9f70636cab1209a61a->leave($__internal_b0f25ae5c4b286c1fe469d3e50bc5a8b702360876025ec9f70636cab1209a61a_prof);

        
        $__internal_2d681c0c7f287f199c24e34d60b37806ece90f6026ebb48c24008f691aa8a909->leave($__internal_2d681c0c7f287f199c24e34d60b37806ece90f6026ebb48c24008f691aa8a909_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ab4e3d7291843b8682407eec9753d05a6d425d7f442e85a93ea3535668b97d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab4e3d7291843b8682407eec9753d05a6d425d7f442e85a93ea3535668b97d63->enter($__internal_ab4e3d7291843b8682407eec9753d05a6d425d7f442e85a93ea3535668b97d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_6f9845f0a76c91ef140f79ea08793c559117d45c9ec39ba4c1c8764f10c4df26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9845f0a76c91ef140f79ea08793c559117d45c9ec39ba4c1c8764f10c4df26->enter($__internal_6f9845f0a76c91ef140f79ea08793c559117d45c9ec39ba4c1c8764f10c4df26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6f9845f0a76c91ef140f79ea08793c559117d45c9ec39ba4c1c8764f10c4df26->leave($__internal_6f9845f0a76c91ef140f79ea08793c559117d45c9ec39ba4c1c8764f10c4df26_prof);

        
        $__internal_ab4e3d7291843b8682407eec9753d05a6d425d7f442e85a93ea3535668b97d63->leave($__internal_ab4e3d7291843b8682407eec9753d05a6d425d7f442e85a93ea3535668b97d63_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ac8543fa922e5afee2f6f7cd9917e07823c6a199d7107003cdde49493d88eb26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8543fa922e5afee2f6f7cd9917e07823c6a199d7107003cdde49493d88eb26->enter($__internal_ac8543fa922e5afee2f6f7cd9917e07823c6a199d7107003cdde49493d88eb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_a8ec78457ce536fccf8082dcc9ff40b3334316e5c72880a254591418780d038a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ec78457ce536fccf8082dcc9ff40b3334316e5c72880a254591418780d038a->enter($__internal_a8ec78457ce536fccf8082dcc9ff40b3334316e5c72880a254591418780d038a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a8ec78457ce536fccf8082dcc9ff40b3334316e5c72880a254591418780d038a->leave($__internal_a8ec78457ce536fccf8082dcc9ff40b3334316e5c72880a254591418780d038a_prof);

        
        $__internal_ac8543fa922e5afee2f6f7cd9917e07823c6a199d7107003cdde49493d88eb26->leave($__internal_ac8543fa922e5afee2f6f7cd9917e07823c6a199d7107003cdde49493d88eb26_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
