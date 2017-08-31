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
        $__internal_ddf1b793ce1456f3582a9a1496bfb2b9e6ea11c729e8c600ae3cb09fddd890f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf1b793ce1456f3582a9a1496bfb2b9e6ea11c729e8c600ae3cb09fddd890f7->enter($__internal_ddf1b793ce1456f3582a9a1496bfb2b9e6ea11c729e8c600ae3cb09fddd890f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_11389d88651c2d869da7a32aa9605220093a34f553fe7e0968d033ede5ab73f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11389d88651c2d869da7a32aa9605220093a34f553fe7e0968d033ede5ab73f5->enter($__internal_11389d88651c2d869da7a32aa9605220093a34f553fe7e0968d033ede5ab73f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ddf1b793ce1456f3582a9a1496bfb2b9e6ea11c729e8c600ae3cb09fddd890f7->leave($__internal_ddf1b793ce1456f3582a9a1496bfb2b9e6ea11c729e8c600ae3cb09fddd890f7_prof);

        
        $__internal_11389d88651c2d869da7a32aa9605220093a34f553fe7e0968d033ede5ab73f5->leave($__internal_11389d88651c2d869da7a32aa9605220093a34f553fe7e0968d033ede5ab73f5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2fc28199902c15fec9574701f3be9823c87abf7543fb6bb907ea43981de69389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc28199902c15fec9574701f3be9823c87abf7543fb6bb907ea43981de69389->enter($__internal_2fc28199902c15fec9574701f3be9823c87abf7543fb6bb907ea43981de69389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c0ae5759b9fe257c12063abdf16684532bfb305ce778678423a1c0d890799571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ae5759b9fe257c12063abdf16684532bfb305ce778678423a1c0d890799571->enter($__internal_c0ae5759b9fe257c12063abdf16684532bfb305ce778678423a1c0d890799571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_c0ae5759b9fe257c12063abdf16684532bfb305ce778678423a1c0d890799571->leave($__internal_c0ae5759b9fe257c12063abdf16684532bfb305ce778678423a1c0d890799571_prof);

        
        $__internal_2fc28199902c15fec9574701f3be9823c87abf7543fb6bb907ea43981de69389->leave($__internal_2fc28199902c15fec9574701f3be9823c87abf7543fb6bb907ea43981de69389_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_56af957acb0a0f6268dc5582155b2a84c563b93db35a6cd0bfc94d6964786ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56af957acb0a0f6268dc5582155b2a84c563b93db35a6cd0bfc94d6964786ab3->enter($__internal_56af957acb0a0f6268dc5582155b2a84c563b93db35a6cd0bfc94d6964786ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f86beec946ff13304e150ab8c75fc148215489335102d83ce890ff33f91a951e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86beec946ff13304e150ab8c75fc148215489335102d83ce890ff33f91a951e->enter($__internal_f86beec946ff13304e150ab8c75fc148215489335102d83ce890ff33f91a951e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f86beec946ff13304e150ab8c75fc148215489335102d83ce890ff33f91a951e->leave($__internal_f86beec946ff13304e150ab8c75fc148215489335102d83ce890ff33f91a951e_prof);

        
        $__internal_56af957acb0a0f6268dc5582155b2a84c563b93db35a6cd0bfc94d6964786ab3->leave($__internal_56af957acb0a0f6268dc5582155b2a84c563b93db35a6cd0bfc94d6964786ab3_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f7b0d2570de0a2d2b51f54890f3d577d86412f8abbc6f7ca094c6a4a83982dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b0d2570de0a2d2b51f54890f3d577d86412f8abbc6f7ca094c6a4a83982dfe->enter($__internal_f7b0d2570de0a2d2b51f54890f3d577d86412f8abbc6f7ca094c6a4a83982dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d13c359a1924d2b57bffe1b750cfd12489f439d52552d9a1d990091aa6e62585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d13c359a1924d2b57bffe1b750cfd12489f439d52552d9a1d990091aa6e62585->enter($__internal_d13c359a1924d2b57bffe1b750cfd12489f439d52552d9a1d990091aa6e62585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d13c359a1924d2b57bffe1b750cfd12489f439d52552d9a1d990091aa6e62585->leave($__internal_d13c359a1924d2b57bffe1b750cfd12489f439d52552d9a1d990091aa6e62585_prof);

        
        $__internal_f7b0d2570de0a2d2b51f54890f3d577d86412f8abbc6f7ca094c6a4a83982dfe->leave($__internal_f7b0d2570de0a2d2b51f54890f3d577d86412f8abbc6f7ca094c6a4a83982dfe_prof);

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
