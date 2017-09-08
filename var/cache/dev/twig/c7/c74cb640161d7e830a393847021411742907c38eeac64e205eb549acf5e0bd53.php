<?php

/* @MAUser/Security/login.html.twig */
class __TwigTemplate_e5e905a08de63d190931a289f4e94f996e70e0bbddea65d49a7866cecbbd0d28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Security/login.html.twig", 2);
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
        $__internal_3069ca2bd1f556f3cdfbf65bfec34572988c4110995f8a2e1f3bf19d1d28f688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3069ca2bd1f556f3cdfbf65bfec34572988c4110995f8a2e1f3bf19d1d28f688->enter($__internal_3069ca2bd1f556f3cdfbf65bfec34572988c4110995f8a2e1f3bf19d1d28f688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Security/login.html.twig"));

        $__internal_9fa85e6b48fdded2113189eaf695c775e109f2092cf3c3d373876ff51b33f70c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa85e6b48fdded2113189eaf695c775e109f2092cf3c3d373876ff51b33f70c->enter($__internal_9fa85e6b48fdded2113189eaf695c775e109f2092cf3c3d373876ff51b33f70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3069ca2bd1f556f3cdfbf65bfec34572988c4110995f8a2e1f3bf19d1d28f688->leave($__internal_3069ca2bd1f556f3cdfbf65bfec34572988c4110995f8a2e1f3bf19d1d28f688_prof);

        
        $__internal_9fa85e6b48fdded2113189eaf695c775e109f2092cf3c3d373876ff51b33f70c->leave($__internal_9fa85e6b48fdded2113189eaf695c775e109f2092cf3c3d373876ff51b33f70c_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0878c6b75507220a56d4ca1f69ac8735c50b18ed4f2f356161d91168695321bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0878c6b75507220a56d4ca1f69ac8735c50b18ed4f2f356161d91168695321bc->enter($__internal_0878c6b75507220a56d4ca1f69ac8735c50b18ed4f2f356161d91168695321bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6a0f6d37b6c809c567d52acfe0b16c11d20be872dfcce1ac11ca122c92db347c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a0f6d37b6c809c567d52acfe0b16c11d20be872dfcce1ac11ca122c92db347c->enter($__internal_6a0f6d37b6c809c567d52acfe0b16c11d20be872dfcce1ac11ca122c92db347c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6a0f6d37b6c809c567d52acfe0b16c11d20be872dfcce1ac11ca122c92db347c->leave($__internal_6a0f6d37b6c809c567d52acfe0b16c11d20be872dfcce1ac11ca122c92db347c_prof);

        
        $__internal_0878c6b75507220a56d4ca1f69ac8735c50b18ed4f2f356161d91168695321bc->leave($__internal_0878c6b75507220a56d4ca1f69ac8735c50b18ed4f2f356161d91168695321bc_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Security/login.html.twig";
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
{% endblock fos_user_content %}", "@MAUser/Security/login.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
