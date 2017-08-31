<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_96ed2e195ccd83a545c5ad9a6dd62ab0661bea812b06006b06ea1817e777be21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f8ab1ed58d2a384a6a08801288009a16d2979a96339fd8eb3945bc6f12b4a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8ab1ed58d2a384a6a08801288009a16d2979a96339fd8eb3945bc6f12b4a9e->enter($__internal_3f8ab1ed58d2a384a6a08801288009a16d2979a96339fd8eb3945bc6f12b4a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_5f7755e7e12acd02022061cb68e9a719aec9e97b29a8a9e234f039c903f917a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7755e7e12acd02022061cb68e9a719aec9e97b29a8a9e234f039c903f917a1->enter($__internal_5f7755e7e12acd02022061cb68e9a719aec9e97b29a8a9e234f039c903f917a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f8ab1ed58d2a384a6a08801288009a16d2979a96339fd8eb3945bc6f12b4a9e->leave($__internal_3f8ab1ed58d2a384a6a08801288009a16d2979a96339fd8eb3945bc6f12b4a9e_prof);

        
        $__internal_5f7755e7e12acd02022061cb68e9a719aec9e97b29a8a9e234f039c903f917a1->leave($__internal_5f7755e7e12acd02022061cb68e9a719aec9e97b29a8a9e234f039c903f917a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_22029718591b604be6c5a1590c7bfb567b55224f9e55fff8d72313cba397e9de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22029718591b604be6c5a1590c7bfb567b55224f9e55fff8d72313cba397e9de->enter($__internal_22029718591b604be6c5a1590c7bfb567b55224f9e55fff8d72313cba397e9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5f751f8cda6042d7b20277f6f426aa44bb348388b32b08b27f042197739c3f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f751f8cda6042d7b20277f6f426aa44bb348388b32b08b27f042197739c3f87->enter($__internal_5f751f8cda6042d7b20277f6f426aa44bb348388b32b08b27f042197739c3f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f751f8cda6042d7b20277f6f426aa44bb348388b32b08b27f042197739c3f87->leave($__internal_5f751f8cda6042d7b20277f6f426aa44bb348388b32b08b27f042197739c3f87_prof);

        
        $__internal_22029718591b604be6c5a1590c7bfb567b55224f9e55fff8d72313cba397e9de->leave($__internal_22029718591b604be6c5a1590c7bfb567b55224f9e55fff8d72313cba397e9de_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24761a44cc2600cddc6251a4114792b7904793d7703c7481057ee7d7b87cec48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24761a44cc2600cddc6251a4114792b7904793d7703c7481057ee7d7b87cec48->enter($__internal_24761a44cc2600cddc6251a4114792b7904793d7703c7481057ee7d7b87cec48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3ce4d69063c56a700d4ab2c8f15697a1bfa67d3c858adba9ae73d4b20a5179f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce4d69063c56a700d4ab2c8f15697a1bfa67d3c858adba9ae73d4b20a5179f9->enter($__internal_3ce4d69063c56a700d4ab2c8f15697a1bfa67d3c858adba9ae73d4b20a5179f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3ce4d69063c56a700d4ab2c8f15697a1bfa67d3c858adba9ae73d4b20a5179f9->leave($__internal_3ce4d69063c56a700d4ab2c8f15697a1bfa67d3c858adba9ae73d4b20a5179f9_prof);

        
        $__internal_24761a44cc2600cddc6251a4114792b7904793d7703c7481057ee7d7b87cec48->leave($__internal_24761a44cc2600cddc6251a4114792b7904793d7703c7481057ee7d7b87cec48_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_674d607a78d75b27073a6e22da9519a3a2ba45395ecf47fc2381496802452901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_674d607a78d75b27073a6e22da9519a3a2ba45395ecf47fc2381496802452901->enter($__internal_674d607a78d75b27073a6e22da9519a3a2ba45395ecf47fc2381496802452901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9925ba1475bed7f2fbf8ae30c7827594e8eff50120db238aaac0c3253e756400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9925ba1475bed7f2fbf8ae30c7827594e8eff50120db238aaac0c3253e756400->enter($__internal_9925ba1475bed7f2fbf8ae30c7827594e8eff50120db238aaac0c3253e756400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9925ba1475bed7f2fbf8ae30c7827594e8eff50120db238aaac0c3253e756400->leave($__internal_9925ba1475bed7f2fbf8ae30c7827594e8eff50120db238aaac0c3253e756400_prof);

        
        $__internal_674d607a78d75b27073a6e22da9519a3a2ba45395ecf47fc2381496802452901->leave($__internal_674d607a78d75b27073a6e22da9519a3a2ba45395ecf47fc2381496802452901_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
