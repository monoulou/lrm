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
        $__internal_f4578a2da6bc8499e792fcd0e09788fccb7dc3540052756dac793535e35d4abb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4578a2da6bc8499e792fcd0e09788fccb7dc3540052756dac793535e35d4abb->enter($__internal_f4578a2da6bc8499e792fcd0e09788fccb7dc3540052756dac793535e35d4abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_87252d5249a35710d76d08313bacb84a6fd2c6a58cbf280f50b5f434d257cf0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87252d5249a35710d76d08313bacb84a6fd2c6a58cbf280f50b5f434d257cf0f->enter($__internal_87252d5249a35710d76d08313bacb84a6fd2c6a58cbf280f50b5f434d257cf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f4578a2da6bc8499e792fcd0e09788fccb7dc3540052756dac793535e35d4abb->leave($__internal_f4578a2da6bc8499e792fcd0e09788fccb7dc3540052756dac793535e35d4abb_prof);

        
        $__internal_87252d5249a35710d76d08313bacb84a6fd2c6a58cbf280f50b5f434d257cf0f->leave($__internal_87252d5249a35710d76d08313bacb84a6fd2c6a58cbf280f50b5f434d257cf0f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_de657daeba289b44330e1f51feef0c15f71c54a0648906e7e27d1bd7321324cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de657daeba289b44330e1f51feef0c15f71c54a0648906e7e27d1bd7321324cc->enter($__internal_de657daeba289b44330e1f51feef0c15f71c54a0648906e7e27d1bd7321324cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_e365c855c3664299e9ec37133bd33c5134420758e28123d4a535cea97d5894d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e365c855c3664299e9ec37133bd33c5134420758e28123d4a535cea97d5894d9->enter($__internal_e365c855c3664299e9ec37133bd33c5134420758e28123d4a535cea97d5894d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_e365c855c3664299e9ec37133bd33c5134420758e28123d4a535cea97d5894d9->leave($__internal_e365c855c3664299e9ec37133bd33c5134420758e28123d4a535cea97d5894d9_prof);

        
        $__internal_de657daeba289b44330e1f51feef0c15f71c54a0648906e7e27d1bd7321324cc->leave($__internal_de657daeba289b44330e1f51feef0c15f71c54a0648906e7e27d1bd7321324cc_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_12f789c7b83a094c032a8ac47789011fb2cc63511ab758b1071e5f8b44419a40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f789c7b83a094c032a8ac47789011fb2cc63511ab758b1071e5f8b44419a40->enter($__internal_12f789c7b83a094c032a8ac47789011fb2cc63511ab758b1071e5f8b44419a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_3df679046983c2c19641e5dda52f426aed6aabbec799c1b7cf68de5894cd24cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df679046983c2c19641e5dda52f426aed6aabbec799c1b7cf68de5894cd24cb->enter($__internal_3df679046983c2c19641e5dda52f426aed6aabbec799c1b7cf68de5894cd24cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3df679046983c2c19641e5dda52f426aed6aabbec799c1b7cf68de5894cd24cb->leave($__internal_3df679046983c2c19641e5dda52f426aed6aabbec799c1b7cf68de5894cd24cb_prof);

        
        $__internal_12f789c7b83a094c032a8ac47789011fb2cc63511ab758b1071e5f8b44419a40->leave($__internal_12f789c7b83a094c032a8ac47789011fb2cc63511ab758b1071e5f8b44419a40_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a78582b6c066ee48a85d42d0598657d01a54b40c4cf1c8ebc6d7e556cacc7b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a78582b6c066ee48a85d42d0598657d01a54b40c4cf1c8ebc6d7e556cacc7b9f->enter($__internal_a78582b6c066ee48a85d42d0598657d01a54b40c4cf1c8ebc6d7e556cacc7b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_9199a29e476896870a3bab35084454c719f54a425ff5c631456a39c37e538d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9199a29e476896870a3bab35084454c719f54a425ff5c631456a39c37e538d95->enter($__internal_9199a29e476896870a3bab35084454c719f54a425ff5c631456a39c37e538d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9199a29e476896870a3bab35084454c719f54a425ff5c631456a39c37e538d95->leave($__internal_9199a29e476896870a3bab35084454c719f54a425ff5c631456a39c37e538d95_prof);

        
        $__internal_a78582b6c066ee48a85d42d0598657d01a54b40c4cf1c8ebc6d7e556cacc7b9f->leave($__internal_a78582b6c066ee48a85d42d0598657d01a54b40c4cf1c8ebc6d7e556cacc7b9f_prof);

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
