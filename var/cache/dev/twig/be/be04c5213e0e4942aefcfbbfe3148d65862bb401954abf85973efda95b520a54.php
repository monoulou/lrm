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
        $__internal_43eff70905aa9e4e9222a3563bffcdc37abd56f79cf51084ead2fc5fd56f3b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43eff70905aa9e4e9222a3563bffcdc37abd56f79cf51084ead2fc5fd56f3b96->enter($__internal_43eff70905aa9e4e9222a3563bffcdc37abd56f79cf51084ead2fc5fd56f3b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_28180081fddd25e5f577cdb4c6aa113c4e9678cc9f1fcaab9d6267b2a117e46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28180081fddd25e5f577cdb4c6aa113c4e9678cc9f1fcaab9d6267b2a117e46f->enter($__internal_28180081fddd25e5f577cdb4c6aa113c4e9678cc9f1fcaab9d6267b2a117e46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43eff70905aa9e4e9222a3563bffcdc37abd56f79cf51084ead2fc5fd56f3b96->leave($__internal_43eff70905aa9e4e9222a3563bffcdc37abd56f79cf51084ead2fc5fd56f3b96_prof);

        
        $__internal_28180081fddd25e5f577cdb4c6aa113c4e9678cc9f1fcaab9d6267b2a117e46f->leave($__internal_28180081fddd25e5f577cdb4c6aa113c4e9678cc9f1fcaab9d6267b2a117e46f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9124991ac632f024fc3ddce6c0ff732d20418eebff551dcf645ceedf8e12aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9124991ac632f024fc3ddce6c0ff732d20418eebff551dcf645ceedf8e12aad->enter($__internal_f9124991ac632f024fc3ddce6c0ff732d20418eebff551dcf645ceedf8e12aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5b3dd63d0f8f54fed4e6a441e4e12ff7cd1536212e5d2af1200979641d8e318e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3dd63d0f8f54fed4e6a441e4e12ff7cd1536212e5d2af1200979641d8e318e->enter($__internal_5b3dd63d0f8f54fed4e6a441e4e12ff7cd1536212e5d2af1200979641d8e318e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5b3dd63d0f8f54fed4e6a441e4e12ff7cd1536212e5d2af1200979641d8e318e->leave($__internal_5b3dd63d0f8f54fed4e6a441e4e12ff7cd1536212e5d2af1200979641d8e318e_prof);

        
        $__internal_f9124991ac632f024fc3ddce6c0ff732d20418eebff551dcf645ceedf8e12aad->leave($__internal_f9124991ac632f024fc3ddce6c0ff732d20418eebff551dcf645ceedf8e12aad_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_06899872a23df36175f05f5f4a3141f43fb41c9cb656fb5ea198d7aee519e0a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06899872a23df36175f05f5f4a3141f43fb41c9cb656fb5ea198d7aee519e0a6->enter($__internal_06899872a23df36175f05f5f4a3141f43fb41c9cb656fb5ea198d7aee519e0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_af1976392a4dcc0fdac250cccfcf05967a4bcd6d0cb50e586e356341e5ba17b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1976392a4dcc0fdac250cccfcf05967a4bcd6d0cb50e586e356341e5ba17b5->enter($__internal_af1976392a4dcc0fdac250cccfcf05967a4bcd6d0cb50e586e356341e5ba17b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_af1976392a4dcc0fdac250cccfcf05967a4bcd6d0cb50e586e356341e5ba17b5->leave($__internal_af1976392a4dcc0fdac250cccfcf05967a4bcd6d0cb50e586e356341e5ba17b5_prof);

        
        $__internal_06899872a23df36175f05f5f4a3141f43fb41c9cb656fb5ea198d7aee519e0a6->leave($__internal_06899872a23df36175f05f5f4a3141f43fb41c9cb656fb5ea198d7aee519e0a6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_61bb82b96e7b12bf81ee9c85c3b7b6b287bb2ee608533f2c9296bfb141df38ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61bb82b96e7b12bf81ee9c85c3b7b6b287bb2ee608533f2c9296bfb141df38ab->enter($__internal_61bb82b96e7b12bf81ee9c85c3b7b6b287bb2ee608533f2c9296bfb141df38ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e35903bab1562a2c64172fb432f4f57b603296b87f282f6e0abe42fa3e5b80c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35903bab1562a2c64172fb432f4f57b603296b87f282f6e0abe42fa3e5b80c4->enter($__internal_e35903bab1562a2c64172fb432f4f57b603296b87f282f6e0abe42fa3e5b80c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e35903bab1562a2c64172fb432f4f57b603296b87f282f6e0abe42fa3e5b80c4->leave($__internal_e35903bab1562a2c64172fb432f4f57b603296b87f282f6e0abe42fa3e5b80c4_prof);

        
        $__internal_61bb82b96e7b12bf81ee9c85c3b7b6b287bb2ee608533f2c9296bfb141df38ab->leave($__internal_61bb82b96e7b12bf81ee9c85c3b7b6b287bb2ee608533f2c9296bfb141df38ab_prof);

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
