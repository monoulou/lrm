<?php

/* @MAUser/Resetting/reset.html.twig */
class __TwigTemplate_318f9126566ec71d7411730bd736f1d1684265f73bc6134d83a7c77a4453bae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Resetting/reset.html.twig", 1);
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
        $__internal_c529697ccef4039c19277811c205cf3bf42c351e4b12e164b4ebac95cec6b1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c529697ccef4039c19277811c205cf3bf42c351e4b12e164b4ebac95cec6b1d9->enter($__internal_c529697ccef4039c19277811c205cf3bf42c351e4b12e164b4ebac95cec6b1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/reset.html.twig"));

        $__internal_9de76e392f97320c0978b92ef43582001807aeaf2567eb6d73d8e1f7bf787ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de76e392f97320c0978b92ef43582001807aeaf2567eb6d73d8e1f7bf787ca8->enter($__internal_9de76e392f97320c0978b92ef43582001807aeaf2567eb6d73d8e1f7bf787ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c529697ccef4039c19277811c205cf3bf42c351e4b12e164b4ebac95cec6b1d9->leave($__internal_c529697ccef4039c19277811c205cf3bf42c351e4b12e164b4ebac95cec6b1d9_prof);

        
        $__internal_9de76e392f97320c0978b92ef43582001807aeaf2567eb6d73d8e1f7bf787ca8->leave($__internal_9de76e392f97320c0978b92ef43582001807aeaf2567eb6d73d8e1f7bf787ca8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bbd7eb28cddc7bc9cea39821a253e207e50cb044734cba4195d3356d8f01f3f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbd7eb28cddc7bc9cea39821a253e207e50cb044734cba4195d3356d8f01f3f0->enter($__internal_bbd7eb28cddc7bc9cea39821a253e207e50cb044734cba4195d3356d8f01f3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_84979a16af43025b3045e14dab939ef30efa6277330312bc0d184be8823998b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84979a16af43025b3045e14dab939ef30efa6277330312bc0d184be8823998b1->enter($__internal_84979a16af43025b3045e14dab939ef30efa6277330312bc0d184be8823998b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@MAUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_84979a16af43025b3045e14dab939ef30efa6277330312bc0d184be8823998b1->leave($__internal_84979a16af43025b3045e14dab939ef30efa6277330312bc0d184be8823998b1_prof);

        
        $__internal_bbd7eb28cddc7bc9cea39821a253e207e50cb044734cba4195d3356d8f01f3f0->leave($__internal_bbd7eb28cddc7bc9cea39821a253e207e50cb044734cba4195d3356d8f01f3f0_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
    {% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}", "@MAUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
