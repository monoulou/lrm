<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a96c59af2175f88fa5806e72058fa1fbada270b47a420fd832274b4980b3b31c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_bbaba4bcbd5073546642969a051e798125abf90ab0d2ffc8df48e04dd6074645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbaba4bcbd5073546642969a051e798125abf90ab0d2ffc8df48e04dd6074645->enter($__internal_bbaba4bcbd5073546642969a051e798125abf90ab0d2ffc8df48e04dd6074645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_b9cd71bcd7d65e679334e7cefd01e69140b4d4f400c3e701dbdeca6854738a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9cd71bcd7d65e679334e7cefd01e69140b4d4f400c3e701dbdeca6854738a6d->enter($__internal_b9cd71bcd7d65e679334e7cefd01e69140b4d4f400c3e701dbdeca6854738a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbaba4bcbd5073546642969a051e798125abf90ab0d2ffc8df48e04dd6074645->leave($__internal_bbaba4bcbd5073546642969a051e798125abf90ab0d2ffc8df48e04dd6074645_prof);

        
        $__internal_b9cd71bcd7d65e679334e7cefd01e69140b4d4f400c3e701dbdeca6854738a6d->leave($__internal_b9cd71bcd7d65e679334e7cefd01e69140b4d4f400c3e701dbdeca6854738a6d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8fabb58ff36fb3477ebfb23182961c0397a5cf524a15002df31809f9e5828771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fabb58ff36fb3477ebfb23182961c0397a5cf524a15002df31809f9e5828771->enter($__internal_8fabb58ff36fb3477ebfb23182961c0397a5cf524a15002df31809f9e5828771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_98fe4476da933e0a3b502e4cc741c6e9bc550e20645f9517727b5304a4afc719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98fe4476da933e0a3b502e4cc741c6e9bc550e20645f9517727b5304a4afc719->enter($__internal_98fe4476da933e0a3b502e4cc741c6e9bc550e20645f9517727b5304a4afc719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_98fe4476da933e0a3b502e4cc741c6e9bc550e20645f9517727b5304a4afc719->leave($__internal_98fe4476da933e0a3b502e4cc741c6e9bc550e20645f9517727b5304a4afc719_prof);

        
        $__internal_8fabb58ff36fb3477ebfb23182961c0397a5cf524a15002df31809f9e5828771->leave($__internal_8fabb58ff36fb3477ebfb23182961c0397a5cf524a15002df31809f9e5828771_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
