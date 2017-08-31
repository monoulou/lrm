<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_e1cc2e3062ee17d3a6bdff693beb68c2a66438654f800cd2b62820df5c3f5521 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c24843c4ffa1c6272f0f545639bd7695275618cb321a4f1dd7753a283b9979bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24843c4ffa1c6272f0f545639bd7695275618cb321a4f1dd7753a283b9979bc->enter($__internal_c24843c4ffa1c6272f0f545639bd7695275618cb321a4f1dd7753a283b9979bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_3d78ac67cc8561b60e54557187e84a4b8d7eb6817c6381c2ace6f9c2fbaf0ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d78ac67cc8561b60e54557187e84a4b8d7eb6817c6381c2ace6f9c2fbaf0ea5->enter($__internal_3d78ac67cc8561b60e54557187e84a4b8d7eb6817c6381c2ace6f9c2fbaf0ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c24843c4ffa1c6272f0f545639bd7695275618cb321a4f1dd7753a283b9979bc->leave($__internal_c24843c4ffa1c6272f0f545639bd7695275618cb321a4f1dd7753a283b9979bc_prof);

        
        $__internal_3d78ac67cc8561b60e54557187e84a4b8d7eb6817c6381c2ace6f9c2fbaf0ea5->leave($__internal_3d78ac67cc8561b60e54557187e84a4b8d7eb6817c6381c2ace6f9c2fbaf0ea5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6c93ddf44ced573452dc21388b6f718fbe47d609f0795e5499346e77f1cc170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c93ddf44ced573452dc21388b6f718fbe47d609f0795e5499346e77f1cc170->enter($__internal_c6c93ddf44ced573452dc21388b6f718fbe47d609f0795e5499346e77f1cc170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dc95f355299b92c3dbcde4f975b989ae96d8c4919ba4aa8a2213b6adcb0769c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc95f355299b92c3dbcde4f975b989ae96d8c4919ba4aa8a2213b6adcb0769c9->enter($__internal_dc95f355299b92c3dbcde4f975b989ae96d8c4919ba4aa8a2213b6adcb0769c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dc95f355299b92c3dbcde4f975b989ae96d8c4919ba4aa8a2213b6adcb0769c9->leave($__internal_dc95f355299b92c3dbcde4f975b989ae96d8c4919ba4aa8a2213b6adcb0769c9_prof);

        
        $__internal_c6c93ddf44ced573452dc21388b6f718fbe47d609f0795e5499346e77f1cc170->leave($__internal_c6c93ddf44ced573452dc21388b6f718fbe47d609f0795e5499346e77f1cc170_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e46b176fa20ece7906c857b9d3bea81b6aed00384403a698376ad5f284ea1ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e46b176fa20ece7906c857b9d3bea81b6aed00384403a698376ad5f284ea1ea->enter($__internal_2e46b176fa20ece7906c857b9d3bea81b6aed00384403a698376ad5f284ea1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_167d8a88f011bed88710f7181f9f3536ef88c8f6a31dce779e7411ab26c3fb48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167d8a88f011bed88710f7181f9f3536ef88c8f6a31dce779e7411ab26c3fb48->enter($__internal_167d8a88f011bed88710f7181f9f3536ef88c8f6a31dce779e7411ab26c3fb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_167d8a88f011bed88710f7181f9f3536ef88c8f6a31dce779e7411ab26c3fb48->leave($__internal_167d8a88f011bed88710f7181f9f3536ef88c8f6a31dce779e7411ab26c3fb48_prof);

        
        $__internal_2e46b176fa20ece7906c857b9d3bea81b6aed00384403a698376ad5f284ea1ea->leave($__internal_2e46b176fa20ece7906c857b9d3bea81b6aed00384403a698376ad5f284ea1ea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
