<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b3e431b273a7a606642996a29d9054426547fde99bb3f83f9fd43e30fcc79afb extends Twig_Template
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
        $__internal_1f9f91f7905dfa0cec7b8ce4b3a04d279b434a9702ecf2673d91d95dc0801cca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f9f91f7905dfa0cec7b8ce4b3a04d279b434a9702ecf2673d91d95dc0801cca->enter($__internal_1f9f91f7905dfa0cec7b8ce4b3a04d279b434a9702ecf2673d91d95dc0801cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_3cfb63c280d4c515c6ffa6759d078bb6c898b2aac59fc0949983942c7e9d8295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cfb63c280d4c515c6ffa6759d078bb6c898b2aac59fc0949983942c7e9d8295->enter($__internal_3cfb63c280d4c515c6ffa6759d078bb6c898b2aac59fc0949983942c7e9d8295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_1f9f91f7905dfa0cec7b8ce4b3a04d279b434a9702ecf2673d91d95dc0801cca->leave($__internal_1f9f91f7905dfa0cec7b8ce4b3a04d279b434a9702ecf2673d91d95dc0801cca_prof);

        
        $__internal_3cfb63c280d4c515c6ffa6759d078bb6c898b2aac59fc0949983942c7e9d8295->leave($__internal_3cfb63c280d4c515c6ffa6759d078bb6c898b2aac59fc0949983942c7e9d8295_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
