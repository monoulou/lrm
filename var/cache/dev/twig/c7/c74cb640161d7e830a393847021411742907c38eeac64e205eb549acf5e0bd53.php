<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_e5e905a08de63d190931a289f4e94f996e70e0bbddea65d49a7866cecbbd0d28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 2);
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
        $__internal_958eaab5327968fa608481e903e953c7a4643d6408b4ea0d4a45b87592d16608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_958eaab5327968fa608481e903e953c7a4643d6408b4ea0d4a45b87592d16608->enter($__internal_958eaab5327968fa608481e903e953c7a4643d6408b4ea0d4a45b87592d16608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_299c32fab9787e629d37efd0008d87c45e81899f82acd49eae125eaa3429cd4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299c32fab9787e629d37efd0008d87c45e81899f82acd49eae125eaa3429cd4a->enter($__internal_299c32fab9787e629d37efd0008d87c45e81899f82acd49eae125eaa3429cd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_958eaab5327968fa608481e903e953c7a4643d6408b4ea0d4a45b87592d16608->leave($__internal_958eaab5327968fa608481e903e953c7a4643d6408b4ea0d4a45b87592d16608_prof);

        
        $__internal_299c32fab9787e629d37efd0008d87c45e81899f82acd49eae125eaa3429cd4a->leave($__internal_299c32fab9787e629d37efd0008d87c45e81899f82acd49eae125eaa3429cd4a_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_142b1677acee90023605f907ee87ff272c2db0bcf0cb18458c238d68b558e249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_142b1677acee90023605f907ee87ff272c2db0bcf0cb18458c238d68b558e249->enter($__internal_142b1677acee90023605f907ee87ff272c2db0bcf0cb18458c238d68b558e249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9b90f2502234b8bc6b0d381d5f82b5e4d42651db5543b05ca8f135c6aaf25f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b90f2502234b8bc6b0d381d5f82b5e4d42651db5543b05ca8f135c6aaf25f91->enter($__internal_9b90f2502234b8bc6b0d381d5f82b5e4d42651db5543b05ca8f135c6aaf25f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_9b90f2502234b8bc6b0d381d5f82b5e4d42651db5543b05ca8f135c6aaf25f91->leave($__internal_9b90f2502234b8bc6b0d381d5f82b5e4d42651db5543b05ca8f135c6aaf25f91_prof);

        
        $__internal_142b1677acee90023605f907ee87ff272c2db0bcf0cb18458c238d68b558e249->leave($__internal_142b1677acee90023605f907ee87ff272c2db0bcf0cb18458c238d68b558e249_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
