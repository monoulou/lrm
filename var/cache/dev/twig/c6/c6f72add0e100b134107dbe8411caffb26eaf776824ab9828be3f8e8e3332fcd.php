<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_31eafc9b02fa8740fc883de33cdd76061e4bb02d2140fd54f05d733aca5bf050 extends Twig_Template
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
        $__internal_5282cfdb93283389ba9c1da9f75884481f34bd26a4bf2aee93e5b4d0b2fcd1d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5282cfdb93283389ba9c1da9f75884481f34bd26a4bf2aee93e5b4d0b2fcd1d0->enter($__internal_5282cfdb93283389ba9c1da9f75884481f34bd26a4bf2aee93e5b4d0b2fcd1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_76cea21daa1f019b72054dfb0b3c0cf167f7c260f6fe91340b02228d2dd437c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76cea21daa1f019b72054dfb0b3c0cf167f7c260f6fe91340b02228d2dd437c5->enter($__internal_76cea21daa1f019b72054dfb0b3c0cf167f7c260f6fe91340b02228d2dd437c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5282cfdb93283389ba9c1da9f75884481f34bd26a4bf2aee93e5b4d0b2fcd1d0->leave($__internal_5282cfdb93283389ba9c1da9f75884481f34bd26a4bf2aee93e5b4d0b2fcd1d0_prof);

        
        $__internal_76cea21daa1f019b72054dfb0b3c0cf167f7c260f6fe91340b02228d2dd437c5->leave($__internal_76cea21daa1f019b72054dfb0b3c0cf167f7c260f6fe91340b02228d2dd437c5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e52ac627abaaed6aeb7412bf08c40c88563893263b3454d02640fe8433282e33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e52ac627abaaed6aeb7412bf08c40c88563893263b3454d02640fe8433282e33->enter($__internal_e52ac627abaaed6aeb7412bf08c40c88563893263b3454d02640fe8433282e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4ced711fe95dc908e4697215df96924f58ea2fe2b79346e7beb3c8936ce328aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ced711fe95dc908e4697215df96924f58ea2fe2b79346e7beb3c8936ce328aa->enter($__internal_4ced711fe95dc908e4697215df96924f58ea2fe2b79346e7beb3c8936ce328aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_4ced711fe95dc908e4697215df96924f58ea2fe2b79346e7beb3c8936ce328aa->leave($__internal_4ced711fe95dc908e4697215df96924f58ea2fe2b79346e7beb3c8936ce328aa_prof);

        
        $__internal_e52ac627abaaed6aeb7412bf08c40c88563893263b3454d02640fe8433282e33->leave($__internal_e52ac627abaaed6aeb7412bf08c40c88563893263b3454d02640fe8433282e33_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_406f72a164d584ba8c8f4a590c11f67687d89eb97e6b3bb7189a3ef741eaa45e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406f72a164d584ba8c8f4a590c11f67687d89eb97e6b3bb7189a3ef741eaa45e->enter($__internal_406f72a164d584ba8c8f4a590c11f67687d89eb97e6b3bb7189a3ef741eaa45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_807645c2aec1b8f6987fcf44e5e4d4d4b54b6428bdb3aa5b298292f07caad937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807645c2aec1b8f6987fcf44e5e4d4d4b54b6428bdb3aa5b298292f07caad937->enter($__internal_807645c2aec1b8f6987fcf44e5e4d4d4b54b6428bdb3aa5b298292f07caad937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_807645c2aec1b8f6987fcf44e5e4d4d4b54b6428bdb3aa5b298292f07caad937->leave($__internal_807645c2aec1b8f6987fcf44e5e4d4d4b54b6428bdb3aa5b298292f07caad937_prof);

        
        $__internal_406f72a164d584ba8c8f4a590c11f67687d89eb97e6b3bb7189a3ef741eaa45e->leave($__internal_406f72a164d584ba8c8f4a590c11f67687d89eb97e6b3bb7189a3ef741eaa45e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ed5575f09113772ced9db4a4d00daab752b4f1574271dd0a5a5503e6a09a6534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5575f09113772ced9db4a4d00daab752b4f1574271dd0a5a5503e6a09a6534->enter($__internal_ed5575f09113772ced9db4a4d00daab752b4f1574271dd0a5a5503e6a09a6534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_5276f91a8332b80b5662632a7d5c9a9171e11d6891a89daa2189962261d7dda3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5276f91a8332b80b5662632a7d5c9a9171e11d6891a89daa2189962261d7dda3->enter($__internal_5276f91a8332b80b5662632a7d5c9a9171e11d6891a89daa2189962261d7dda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5276f91a8332b80b5662632a7d5c9a9171e11d6891a89daa2189962261d7dda3->leave($__internal_5276f91a8332b80b5662632a7d5c9a9171e11d6891a89daa2189962261d7dda3_prof);

        
        $__internal_ed5575f09113772ced9db4a4d00daab752b4f1574271dd0a5a5503e6a09a6534->leave($__internal_ed5575f09113772ced9db4a4d00daab752b4f1574271dd0a5a5503e6a09a6534_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
