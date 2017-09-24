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
        $__internal_ac927e3458fddde7f21022b150c0ba10affea6b9022137978b2e2b324dc54040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac927e3458fddde7f21022b150c0ba10affea6b9022137978b2e2b324dc54040->enter($__internal_ac927e3458fddde7f21022b150c0ba10affea6b9022137978b2e2b324dc54040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_3181985a3f3067606673e12d5cab2af07a4d7866165b71987a1611fe9b6d9894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3181985a3f3067606673e12d5cab2af07a4d7866165b71987a1611fe9b6d9894->enter($__internal_3181985a3f3067606673e12d5cab2af07a4d7866165b71987a1611fe9b6d9894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac927e3458fddde7f21022b150c0ba10affea6b9022137978b2e2b324dc54040->leave($__internal_ac927e3458fddde7f21022b150c0ba10affea6b9022137978b2e2b324dc54040_prof);

        
        $__internal_3181985a3f3067606673e12d5cab2af07a4d7866165b71987a1611fe9b6d9894->leave($__internal_3181985a3f3067606673e12d5cab2af07a4d7866165b71987a1611fe9b6d9894_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e95ead478c2025640e7c34ece9edb1b69fe43f6b564d36a6f6b0f132de0e893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e95ead478c2025640e7c34ece9edb1b69fe43f6b564d36a6f6b0f132de0e893->enter($__internal_4e95ead478c2025640e7c34ece9edb1b69fe43f6b564d36a6f6b0f132de0e893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f4527715b19fdbcc7539d2c87ce93916efd9d2b265fc62ef705d933304a71d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4527715b19fdbcc7539d2c87ce93916efd9d2b265fc62ef705d933304a71d40->enter($__internal_f4527715b19fdbcc7539d2c87ce93916efd9d2b265fc62ef705d933304a71d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f4527715b19fdbcc7539d2c87ce93916efd9d2b265fc62ef705d933304a71d40->leave($__internal_f4527715b19fdbcc7539d2c87ce93916efd9d2b265fc62ef705d933304a71d40_prof);

        
        $__internal_4e95ead478c2025640e7c34ece9edb1b69fe43f6b564d36a6f6b0f132de0e893->leave($__internal_4e95ead478c2025640e7c34ece9edb1b69fe43f6b564d36a6f6b0f132de0e893_prof);

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
