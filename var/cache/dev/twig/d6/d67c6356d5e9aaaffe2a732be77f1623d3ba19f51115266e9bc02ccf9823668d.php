<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_b4fc9d2962c401720943bac34c8b8133a1526d9958f3882c1394afa898a65ca0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f256dc35da893e2319d1c8c3cccc71447a5160d33f7321dc2aad1cd171bb1914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f256dc35da893e2319d1c8c3cccc71447a5160d33f7321dc2aad1cd171bb1914->enter($__internal_f256dc35da893e2319d1c8c3cccc71447a5160d33f7321dc2aad1cd171bb1914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_65052b7525a86dcc0122f07f0f97578dd90cc3514c26f53dd935aa5eae4e2a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65052b7525a86dcc0122f07f0f97578dd90cc3514c26f53dd935aa5eae4e2a5c->enter($__internal_65052b7525a86dcc0122f07f0f97578dd90cc3514c26f53dd935aa5eae4e2a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f256dc35da893e2319d1c8c3cccc71447a5160d33f7321dc2aad1cd171bb1914->leave($__internal_f256dc35da893e2319d1c8c3cccc71447a5160d33f7321dc2aad1cd171bb1914_prof);

        
        $__internal_65052b7525a86dcc0122f07f0f97578dd90cc3514c26f53dd935aa5eae4e2a5c->leave($__internal_65052b7525a86dcc0122f07f0f97578dd90cc3514c26f53dd935aa5eae4e2a5c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80b88c162f489fd764c97c15b27c18a4070206b3f350bb068be7efbe6baaf186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b88c162f489fd764c97c15b27c18a4070206b3f350bb068be7efbe6baaf186->enter($__internal_80b88c162f489fd764c97c15b27c18a4070206b3f350bb068be7efbe6baaf186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_16e4b82a5b1e975153c5e4780ed8a2f19d7d6ffea0ef1561e6c85a821700fbe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e4b82a5b1e975153c5e4780ed8a2f19d7d6ffea0ef1561e6c85a821700fbe9->enter($__internal_16e4b82a5b1e975153c5e4780ed8a2f19d7d6ffea0ef1561e6c85a821700fbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_16e4b82a5b1e975153c5e4780ed8a2f19d7d6ffea0ef1561e6c85a821700fbe9->leave($__internal_16e4b82a5b1e975153c5e4780ed8a2f19d7d6ffea0ef1561e6c85a821700fbe9_prof);

        
        $__internal_80b88c162f489fd764c97c15b27c18a4070206b3f350bb068be7efbe6baaf186->leave($__internal_80b88c162f489fd764c97c15b27c18a4070206b3f350bb068be7efbe6baaf186_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
