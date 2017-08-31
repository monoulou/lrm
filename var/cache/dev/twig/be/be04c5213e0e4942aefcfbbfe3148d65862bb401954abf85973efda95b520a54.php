<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c009938afcf06bc67a2938392d54e5cd8b8058fb64a135549e68bbf3c0511645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5340198b08815f8b161a8f2aafd8c28c8b6e248c940b8ebb9a1bdabc958f95b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5340198b08815f8b161a8f2aafd8c28c8b6e248c940b8ebb9a1bdabc958f95b9->enter($__internal_5340198b08815f8b161a8f2aafd8c28c8b6e248c940b8ebb9a1bdabc958f95b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6bd582218ab7338782b5364f7f7c8ea529e4df1043434fe826b8690f485954e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd582218ab7338782b5364f7f7c8ea529e4df1043434fe826b8690f485954e6->enter($__internal_6bd582218ab7338782b5364f7f7c8ea529e4df1043434fe826b8690f485954e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5340198b08815f8b161a8f2aafd8c28c8b6e248c940b8ebb9a1bdabc958f95b9->leave($__internal_5340198b08815f8b161a8f2aafd8c28c8b6e248c940b8ebb9a1bdabc958f95b9_prof);

        
        $__internal_6bd582218ab7338782b5364f7f7c8ea529e4df1043434fe826b8690f485954e6->leave($__internal_6bd582218ab7338782b5364f7f7c8ea529e4df1043434fe826b8690f485954e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_876fe216413456b5ca8a75bf0689e54195ef4d56412e34f3624e5eb89d2a9588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876fe216413456b5ca8a75bf0689e54195ef4d56412e34f3624e5eb89d2a9588->enter($__internal_876fe216413456b5ca8a75bf0689e54195ef4d56412e34f3624e5eb89d2a9588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_08fa142371750ca33798ec5c79c0a162ccfd0910258eccba446c975ad023057c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fa142371750ca33798ec5c79c0a162ccfd0910258eccba446c975ad023057c->enter($__internal_08fa142371750ca33798ec5c79c0a162ccfd0910258eccba446c975ad023057c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_08fa142371750ca33798ec5c79c0a162ccfd0910258eccba446c975ad023057c->leave($__internal_08fa142371750ca33798ec5c79c0a162ccfd0910258eccba446c975ad023057c_prof);

        
        $__internal_876fe216413456b5ca8a75bf0689e54195ef4d56412e34f3624e5eb89d2a9588->leave($__internal_876fe216413456b5ca8a75bf0689e54195ef4d56412e34f3624e5eb89d2a9588_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3cdce0030cce70eb647e7c55efb6aed21862ea0ff5dc44a1d2cbbe2a7f401a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cdce0030cce70eb647e7c55efb6aed21862ea0ff5dc44a1d2cbbe2a7f401a79->enter($__internal_3cdce0030cce70eb647e7c55efb6aed21862ea0ff5dc44a1d2cbbe2a7f401a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d43ca0c15dae398a5130e109ee2a7e3736e805c4c6e5fe2174390118450f9add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43ca0c15dae398a5130e109ee2a7e3736e805c4c6e5fe2174390118450f9add->enter($__internal_d43ca0c15dae398a5130e109ee2a7e3736e805c4c6e5fe2174390118450f9add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d43ca0c15dae398a5130e109ee2a7e3736e805c4c6e5fe2174390118450f9add->leave($__internal_d43ca0c15dae398a5130e109ee2a7e3736e805c4c6e5fe2174390118450f9add_prof);

        
        $__internal_3cdce0030cce70eb647e7c55efb6aed21862ea0ff5dc44a1d2cbbe2a7f401a79->leave($__internal_3cdce0030cce70eb647e7c55efb6aed21862ea0ff5dc44a1d2cbbe2a7f401a79_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f93c275afafdbd6ad7e57af1b0fc50370e606099f5d1efb3309e2fce19d8ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f93c275afafdbd6ad7e57af1b0fc50370e606099f5d1efb3309e2fce19d8ec3->enter($__internal_9f93c275afafdbd6ad7e57af1b0fc50370e606099f5d1efb3309e2fce19d8ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f6ab812f6e09f05b87751b60d6fc5811c561ecf8dcd661fc200599627e039acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ab812f6e09f05b87751b60d6fc5811c561ecf8dcd661fc200599627e039acb->enter($__internal_f6ab812f6e09f05b87751b60d6fc5811c561ecf8dcd661fc200599627e039acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f6ab812f6e09f05b87751b60d6fc5811c561ecf8dcd661fc200599627e039acb->leave($__internal_f6ab812f6e09f05b87751b60d6fc5811c561ecf8dcd661fc200599627e039acb_prof);

        
        $__internal_9f93c275afafdbd6ad7e57af1b0fc50370e606099f5d1efb3309e2fce19d8ec3->leave($__internal_9f93c275afafdbd6ad7e57af1b0fc50370e606099f5d1efb3309e2fce19d8ec3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
