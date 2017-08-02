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
        $__internal_b9759c2d321d1997d19972f95f88508bc97fc1b384ab0289a8a07dfc3efe6dde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9759c2d321d1997d19972f95f88508bc97fc1b384ab0289a8a07dfc3efe6dde->enter($__internal_b9759c2d321d1997d19972f95f88508bc97fc1b384ab0289a8a07dfc3efe6dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_d067735625457663f83e71614ba5946259ba6cef4e9d60412d3139905e1be3ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d067735625457663f83e71614ba5946259ba6cef4e9d60412d3139905e1be3ad->enter($__internal_d067735625457663f83e71614ba5946259ba6cef4e9d60412d3139905e1be3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9759c2d321d1997d19972f95f88508bc97fc1b384ab0289a8a07dfc3efe6dde->leave($__internal_b9759c2d321d1997d19972f95f88508bc97fc1b384ab0289a8a07dfc3efe6dde_prof);

        
        $__internal_d067735625457663f83e71614ba5946259ba6cef4e9d60412d3139905e1be3ad->leave($__internal_d067735625457663f83e71614ba5946259ba6cef4e9d60412d3139905e1be3ad_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75e5881c653c30f53fba0b2aeebb581fd06050e74e0cc89b74f597c9201e79b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75e5881c653c30f53fba0b2aeebb581fd06050e74e0cc89b74f597c9201e79b1->enter($__internal_75e5881c653c30f53fba0b2aeebb581fd06050e74e0cc89b74f597c9201e79b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_99648031ced231940ec1746147f18a2d1f2fd0a35753e531f8444e5c127a5712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99648031ced231940ec1746147f18a2d1f2fd0a35753e531f8444e5c127a5712->enter($__internal_99648031ced231940ec1746147f18a2d1f2fd0a35753e531f8444e5c127a5712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_99648031ced231940ec1746147f18a2d1f2fd0a35753e531f8444e5c127a5712->leave($__internal_99648031ced231940ec1746147f18a2d1f2fd0a35753e531f8444e5c127a5712_prof);

        
        $__internal_75e5881c653c30f53fba0b2aeebb581fd06050e74e0cc89b74f597c9201e79b1->leave($__internal_75e5881c653c30f53fba0b2aeebb581fd06050e74e0cc89b74f597c9201e79b1_prof);

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
