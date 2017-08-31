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
        $__internal_c91b17b1a0acb7a24e190f123df7628b380c0cc6f419af91ce6562041147e527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91b17b1a0acb7a24e190f123df7628b380c0cc6f419af91ce6562041147e527->enter($__internal_c91b17b1a0acb7a24e190f123df7628b380c0cc6f419af91ce6562041147e527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":email:email.txt.twig"));

        $__internal_99ba9d245614634943671bce2740c4dee616e15dc75ef43694273761e33a3082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ba9d245614634943671bce2740c4dee616e15dc75ef43694273761e33a3082->enter($__internal_99ba9d245614634943671bce2740c4dee616e15dc75ef43694273761e33a3082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":email:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c91b17b1a0acb7a24e190f123df7628b380c0cc6f419af91ce6562041147e527->leave($__internal_c91b17b1a0acb7a24e190f123df7628b380c0cc6f419af91ce6562041147e527_prof);

        
        $__internal_99ba9d245614634943671bce2740c4dee616e15dc75ef43694273761e33a3082->leave($__internal_99ba9d245614634943671bce2740c4dee616e15dc75ef43694273761e33a3082_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_97ea0718e6438f155525e73764e6c301c5465df7d8ec7baedf3a8e29c93e83f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ea0718e6438f155525e73764e6c301c5465df7d8ec7baedf3a8e29c93e83f5->enter($__internal_97ea0718e6438f155525e73764e6c301c5465df7d8ec7baedf3a8e29c93e83f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3bcb79b26214458fedbe76fb078efb9d8194e2a1527abd2edaa6db548687ca44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bcb79b26214458fedbe76fb078efb9d8194e2a1527abd2edaa6db548687ca44->enter($__internal_3bcb79b26214458fedbe76fb078efb9d8194e2a1527abd2edaa6db548687ca44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_3bcb79b26214458fedbe76fb078efb9d8194e2a1527abd2edaa6db548687ca44->leave($__internal_3bcb79b26214458fedbe76fb078efb9d8194e2a1527abd2edaa6db548687ca44_prof);

        
        $__internal_97ea0718e6438f155525e73764e6c301c5465df7d8ec7baedf3a8e29c93e83f5->leave($__internal_97ea0718e6438f155525e73764e6c301c5465df7d8ec7baedf3a8e29c93e83f5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_831b4ada77e8be88943dc1f7da59c2e42670cc2601c1e9d325b8cc4bfa6a3825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831b4ada77e8be88943dc1f7da59c2e42670cc2601c1e9d325b8cc4bfa6a3825->enter($__internal_831b4ada77e8be88943dc1f7da59c2e42670cc2601c1e9d325b8cc4bfa6a3825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_8a3f558b84f9bc670803e28e2a501d527e8e4a1a8ce50dbe3e56233367d819f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3f558b84f9bc670803e28e2a501d527e8e4a1a8ce50dbe3e56233367d819f2->enter($__internal_8a3f558b84f9bc670803e28e2a501d527e8e4a1a8ce50dbe3e56233367d819f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8a3f558b84f9bc670803e28e2a501d527e8e4a1a8ce50dbe3e56233367d819f2->leave($__internal_8a3f558b84f9bc670803e28e2a501d527e8e4a1a8ce50dbe3e56233367d819f2_prof);

        
        $__internal_831b4ada77e8be88943dc1f7da59c2e42670cc2601c1e9d325b8cc4bfa6a3825->leave($__internal_831b4ada77e8be88943dc1f7da59c2e42670cc2601c1e9d325b8cc4bfa6a3825_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cced1dae6fd67a2d894d17d8a99bda7450c09a95b5d6e442f487c0dc31b9e7b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cced1dae6fd67a2d894d17d8a99bda7450c09a95b5d6e442f487c0dc31b9e7b5->enter($__internal_cced1dae6fd67a2d894d17d8a99bda7450c09a95b5d6e442f487c0dc31b9e7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bae062078ed31a372f2cfe3ba8f391039634590048f55ee7d0f74cd1849f42d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae062078ed31a372f2cfe3ba8f391039634590048f55ee7d0f74cd1849f42d3->enter($__internal_bae062078ed31a372f2cfe3ba8f391039634590048f55ee7d0f74cd1849f42d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bae062078ed31a372f2cfe3ba8f391039634590048f55ee7d0f74cd1849f42d3->leave($__internal_bae062078ed31a372f2cfe3ba8f391039634590048f55ee7d0f74cd1849f42d3_prof);

        
        $__internal_cced1dae6fd67a2d894d17d8a99bda7450c09a95b5d6e442f487c0dc31b9e7b5->leave($__internal_cced1dae6fd67a2d894d17d8a99bda7450c09a95b5d6e442f487c0dc31b9e7b5_prof);

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
