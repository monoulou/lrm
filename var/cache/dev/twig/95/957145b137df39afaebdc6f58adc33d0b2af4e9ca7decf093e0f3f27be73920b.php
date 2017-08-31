<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_bf0ba284f12ee786b43cc39f0e494393c989a31f818ebc5c379c1878a2934ad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7cdac66ac7d9d5da5b02a092d2fa5ef3c0b9e314f45ab249037a993f944f290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7cdac66ac7d9d5da5b02a092d2fa5ef3c0b9e314f45ab249037a993f944f290->enter($__internal_d7cdac66ac7d9d5da5b02a092d2fa5ef3c0b9e314f45ab249037a993f944f290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_1e0952fef2382d0573191cf1ed4a20a4f5c3c62769c7d48f5d2d3deae411d5a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0952fef2382d0573191cf1ed4a20a4f5c3c62769c7d48f5d2d3deae411d5a6->enter($__internal_1e0952fef2382d0573191cf1ed4a20a4f5c3c62769c7d48f5d2d3deae411d5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_d7cdac66ac7d9d5da5b02a092d2fa5ef3c0b9e314f45ab249037a993f944f290->leave($__internal_d7cdac66ac7d9d5da5b02a092d2fa5ef3c0b9e314f45ab249037a993f944f290_prof);

        
        $__internal_1e0952fef2382d0573191cf1ed4a20a4f5c3c62769c7d48f5d2d3deae411d5a6->leave($__internal_1e0952fef2382d0573191cf1ed4a20a4f5c3c62769c7d48f5d2d3deae411d5a6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
