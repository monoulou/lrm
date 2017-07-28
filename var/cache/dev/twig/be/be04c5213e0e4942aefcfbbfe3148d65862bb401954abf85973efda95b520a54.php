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
        $__internal_ed2e9f38ab55874b6e93e99f706c44bceb8edd106426a86d4a3e79d8274a004b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed2e9f38ab55874b6e93e99f706c44bceb8edd106426a86d4a3e79d8274a004b->enter($__internal_ed2e9f38ab55874b6e93e99f706c44bceb8edd106426a86d4a3e79d8274a004b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_527f191b072ba2e5a5de606a07395497c193e5c09ccb6643b4ec91a88483df2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527f191b072ba2e5a5de606a07395497c193e5c09ccb6643b4ec91a88483df2e->enter($__internal_527f191b072ba2e5a5de606a07395497c193e5c09ccb6643b4ec91a88483df2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed2e9f38ab55874b6e93e99f706c44bceb8edd106426a86d4a3e79d8274a004b->leave($__internal_ed2e9f38ab55874b6e93e99f706c44bceb8edd106426a86d4a3e79d8274a004b_prof);

        
        $__internal_527f191b072ba2e5a5de606a07395497c193e5c09ccb6643b4ec91a88483df2e->leave($__internal_527f191b072ba2e5a5de606a07395497c193e5c09ccb6643b4ec91a88483df2e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_54f6c15e28a2cbdb5c179fc6d39a18112dccffba0d8567baaa2615ec3e797ad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54f6c15e28a2cbdb5c179fc6d39a18112dccffba0d8567baaa2615ec3e797ad1->enter($__internal_54f6c15e28a2cbdb5c179fc6d39a18112dccffba0d8567baaa2615ec3e797ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_78910c76ecc469812bbc7be9707310a8b021cabf5480f7c9aa47c924a52505ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78910c76ecc469812bbc7be9707310a8b021cabf5480f7c9aa47c924a52505ce->enter($__internal_78910c76ecc469812bbc7be9707310a8b021cabf5480f7c9aa47c924a52505ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_78910c76ecc469812bbc7be9707310a8b021cabf5480f7c9aa47c924a52505ce->leave($__internal_78910c76ecc469812bbc7be9707310a8b021cabf5480f7c9aa47c924a52505ce_prof);

        
        $__internal_54f6c15e28a2cbdb5c179fc6d39a18112dccffba0d8567baaa2615ec3e797ad1->leave($__internal_54f6c15e28a2cbdb5c179fc6d39a18112dccffba0d8567baaa2615ec3e797ad1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a7c521227ec8e05e58e1fb527074d76ebb4bd58c65279d690498edf9462d411d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c521227ec8e05e58e1fb527074d76ebb4bd58c65279d690498edf9462d411d->enter($__internal_a7c521227ec8e05e58e1fb527074d76ebb4bd58c65279d690498edf9462d411d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_26735812f855933687fe20ceb247879a8b01fb7f2d19743987be23a6a626e872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26735812f855933687fe20ceb247879a8b01fb7f2d19743987be23a6a626e872->enter($__internal_26735812f855933687fe20ceb247879a8b01fb7f2d19743987be23a6a626e872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_26735812f855933687fe20ceb247879a8b01fb7f2d19743987be23a6a626e872->leave($__internal_26735812f855933687fe20ceb247879a8b01fb7f2d19743987be23a6a626e872_prof);

        
        $__internal_a7c521227ec8e05e58e1fb527074d76ebb4bd58c65279d690498edf9462d411d->leave($__internal_a7c521227ec8e05e58e1fb527074d76ebb4bd58c65279d690498edf9462d411d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8175c550dbe9b77296c6ca76a4db9fce47b3948d9ee81872b283ea351139a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8175c550dbe9b77296c6ca76a4db9fce47b3948d9ee81872b283ea351139a60->enter($__internal_c8175c550dbe9b77296c6ca76a4db9fce47b3948d9ee81872b283ea351139a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dd925e8fd52f52a6fecbab3b12a818d5cf4b306405b89591073ee90c44281849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd925e8fd52f52a6fecbab3b12a818d5cf4b306405b89591073ee90c44281849->enter($__internal_dd925e8fd52f52a6fecbab3b12a818d5cf4b306405b89591073ee90c44281849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_dd925e8fd52f52a6fecbab3b12a818d5cf4b306405b89591073ee90c44281849->leave($__internal_dd925e8fd52f52a6fecbab3b12a818d5cf4b306405b89591073ee90c44281849_prof);

        
        $__internal_c8175c550dbe9b77296c6ca76a4db9fce47b3948d9ee81872b283ea351139a60->leave($__internal_c8175c550dbe9b77296c6ca76a4db9fce47b3948d9ee81872b283ea351139a60_prof);

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
