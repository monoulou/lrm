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
        $__internal_c8b8f82257b109bff33351e495ebc3d22642ad41c9b4252ceda6c9af9290ef53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b8f82257b109bff33351e495ebc3d22642ad41c9b4252ceda6c9af9290ef53->enter($__internal_c8b8f82257b109bff33351e495ebc3d22642ad41c9b4252ceda6c9af9290ef53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_044f5badf66c602d550a02bd3d8f73b2ae615feb01c78ef92c92903797d653c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044f5badf66c602d550a02bd3d8f73b2ae615feb01c78ef92c92903797d653c1->enter($__internal_044f5badf66c602d550a02bd3d8f73b2ae615feb01c78ef92c92903797d653c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c8b8f82257b109bff33351e495ebc3d22642ad41c9b4252ceda6c9af9290ef53->leave($__internal_c8b8f82257b109bff33351e495ebc3d22642ad41c9b4252ceda6c9af9290ef53_prof);

        
        $__internal_044f5badf66c602d550a02bd3d8f73b2ae615feb01c78ef92c92903797d653c1->leave($__internal_044f5badf66c602d550a02bd3d8f73b2ae615feb01c78ef92c92903797d653c1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_72055f166fe4d54b36d3707fb30afcd1ac6be8549051e3460899cb25eb60abbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72055f166fe4d54b36d3707fb30afcd1ac6be8549051e3460899cb25eb60abbb->enter($__internal_72055f166fe4d54b36d3707fb30afcd1ac6be8549051e3460899cb25eb60abbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8a7fee2991a48235ce7394cf508be6b7c772fafaca214288d03134ae970f80a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7fee2991a48235ce7394cf508be6b7c772fafaca214288d03134ae970f80a0->enter($__internal_8a7fee2991a48235ce7394cf508be6b7c772fafaca214288d03134ae970f80a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_8a7fee2991a48235ce7394cf508be6b7c772fafaca214288d03134ae970f80a0->leave($__internal_8a7fee2991a48235ce7394cf508be6b7c772fafaca214288d03134ae970f80a0_prof);

        
        $__internal_72055f166fe4d54b36d3707fb30afcd1ac6be8549051e3460899cb25eb60abbb->leave($__internal_72055f166fe4d54b36d3707fb30afcd1ac6be8549051e3460899cb25eb60abbb_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_258ee97a7b11224c6b4b4f3336d3ec1340ac2e7390b9b0a4de467fd8426bc96e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_258ee97a7b11224c6b4b4f3336d3ec1340ac2e7390b9b0a4de467fd8426bc96e->enter($__internal_258ee97a7b11224c6b4b4f3336d3ec1340ac2e7390b9b0a4de467fd8426bc96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ea7660c53d7186aa8d3860f98addd17213c154e98435a2c474dae4a7552171f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7660c53d7186aa8d3860f98addd17213c154e98435a2c474dae4a7552171f0->enter($__internal_ea7660c53d7186aa8d3860f98addd17213c154e98435a2c474dae4a7552171f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ea7660c53d7186aa8d3860f98addd17213c154e98435a2c474dae4a7552171f0->leave($__internal_ea7660c53d7186aa8d3860f98addd17213c154e98435a2c474dae4a7552171f0_prof);

        
        $__internal_258ee97a7b11224c6b4b4f3336d3ec1340ac2e7390b9b0a4de467fd8426bc96e->leave($__internal_258ee97a7b11224c6b4b4f3336d3ec1340ac2e7390b9b0a4de467fd8426bc96e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d8c7566af2008c5e3edd5e1214310d5b5800692e41d50d0fa4e1e488eef4c008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c7566af2008c5e3edd5e1214310d5b5800692e41d50d0fa4e1e488eef4c008->enter($__internal_d8c7566af2008c5e3edd5e1214310d5b5800692e41d50d0fa4e1e488eef4c008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_0927fed54b851c6d5f823f371a522f2d7df368cdc1c990088de459939c226176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0927fed54b851c6d5f823f371a522f2d7df368cdc1c990088de459939c226176->enter($__internal_0927fed54b851c6d5f823f371a522f2d7df368cdc1c990088de459939c226176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0927fed54b851c6d5f823f371a522f2d7df368cdc1c990088de459939c226176->leave($__internal_0927fed54b851c6d5f823f371a522f2d7df368cdc1c990088de459939c226176_prof);

        
        $__internal_d8c7566af2008c5e3edd5e1214310d5b5800692e41d50d0fa4e1e488eef4c008->leave($__internal_d8c7566af2008c5e3edd5e1214310d5b5800692e41d50d0fa4e1e488eef4c008_prof);

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
