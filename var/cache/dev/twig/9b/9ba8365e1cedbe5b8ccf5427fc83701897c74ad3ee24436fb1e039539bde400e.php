<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_0e6a3ef218e23d2c15468e1d10cbba1d8d45fcec8f03755558512a6f50759df1 extends Twig_Template
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
        $__internal_37b8b285ea36ec68058602619fa1a29c1ff40cd3883fb4236231ec36a5a21dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b8b285ea36ec68058602619fa1a29c1ff40cd3883fb4236231ec36a5a21dfd->enter($__internal_37b8b285ea36ec68058602619fa1a29c1ff40cd3883fb4236231ec36a5a21dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_62b448c10a60b49a780a04b138963ab0ca5e3f087bc002fad6cbe07d3b7af230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b448c10a60b49a780a04b138963ab0ca5e3f087bc002fad6cbe07d3b7af230->enter($__internal_62b448c10a60b49a780a04b138963ab0ca5e3f087bc002fad6cbe07d3b7af230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_37b8b285ea36ec68058602619fa1a29c1ff40cd3883fb4236231ec36a5a21dfd->leave($__internal_37b8b285ea36ec68058602619fa1a29c1ff40cd3883fb4236231ec36a5a21dfd_prof);

        
        $__internal_62b448c10a60b49a780a04b138963ab0ca5e3f087bc002fad6cbe07d3b7af230->leave($__internal_62b448c10a60b49a780a04b138963ab0ca5e3f087bc002fad6cbe07d3b7af230_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c83b6723a5dfa00467cf39654134e594253f7a3c25770eef6bcc28c008d59162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c83b6723a5dfa00467cf39654134e594253f7a3c25770eef6bcc28c008d59162->enter($__internal_c83b6723a5dfa00467cf39654134e594253f7a3c25770eef6bcc28c008d59162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_bfa40e97ac575e8c44e768b26f879e21ab800ab281281b828f8407dbbbc5be1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa40e97ac575e8c44e768b26f879e21ab800ab281281b828f8407dbbbc5be1f->enter($__internal_bfa40e97ac575e8c44e768b26f879e21ab800ab281281b828f8407dbbbc5be1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_bfa40e97ac575e8c44e768b26f879e21ab800ab281281b828f8407dbbbc5be1f->leave($__internal_bfa40e97ac575e8c44e768b26f879e21ab800ab281281b828f8407dbbbc5be1f_prof);

        
        $__internal_c83b6723a5dfa00467cf39654134e594253f7a3c25770eef6bcc28c008d59162->leave($__internal_c83b6723a5dfa00467cf39654134e594253f7a3c25770eef6bcc28c008d59162_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f7ce5ca7afec2818f8876c429b70d17f48ab1e1566da3b85decc18896f8f6d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ce5ca7afec2818f8876c429b70d17f48ab1e1566da3b85decc18896f8f6d9b->enter($__internal_f7ce5ca7afec2818f8876c429b70d17f48ab1e1566da3b85decc18896f8f6d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_aa0317db0c0e5b0eb16de5ead2a0cbe4bbc045aa609d12cf7afbd659888d32c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0317db0c0e5b0eb16de5ead2a0cbe4bbc045aa609d12cf7afbd659888d32c4->enter($__internal_aa0317db0c0e5b0eb16de5ead2a0cbe4bbc045aa609d12cf7afbd659888d32c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_aa0317db0c0e5b0eb16de5ead2a0cbe4bbc045aa609d12cf7afbd659888d32c4->leave($__internal_aa0317db0c0e5b0eb16de5ead2a0cbe4bbc045aa609d12cf7afbd659888d32c4_prof);

        
        $__internal_f7ce5ca7afec2818f8876c429b70d17f48ab1e1566da3b85decc18896f8f6d9b->leave($__internal_f7ce5ca7afec2818f8876c429b70d17f48ab1e1566da3b85decc18896f8f6d9b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4e1b56012a2dd941f5f82ba1bb36cd07886d3f4555e5891606ef92183c559ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1b56012a2dd941f5f82ba1bb36cd07886d3f4555e5891606ef92183c559ac5->enter($__internal_4e1b56012a2dd941f5f82ba1bb36cd07886d3f4555e5891606ef92183c559ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_1c2edf400a1cab1795d222b4f00495fad40c823a651d26704400fc31983f62e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2edf400a1cab1795d222b4f00495fad40c823a651d26704400fc31983f62e1->enter($__internal_1c2edf400a1cab1795d222b4f00495fad40c823a651d26704400fc31983f62e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1c2edf400a1cab1795d222b4f00495fad40c823a651d26704400fc31983f62e1->leave($__internal_1c2edf400a1cab1795d222b4f00495fad40c823a651d26704400fc31983f62e1_prof);

        
        $__internal_4e1b56012a2dd941f5f82ba1bb36cd07886d3f4555e5891606ef92183c559ac5->leave($__internal_4e1b56012a2dd941f5f82ba1bb36cd07886d3f4555e5891606ef92183c559ac5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
