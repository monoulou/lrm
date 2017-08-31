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
        $__internal_607a35f6786264d33c35d308176eb8cce03b35293e2642cfd3b066df7ff78974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_607a35f6786264d33c35d308176eb8cce03b35293e2642cfd3b066df7ff78974->enter($__internal_607a35f6786264d33c35d308176eb8cce03b35293e2642cfd3b066df7ff78974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4b7011b22acb37ae9248949d639f8a3d8cc939215d593131796273a18f9cd5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7011b22acb37ae9248949d639f8a3d8cc939215d593131796273a18f9cd5af->enter($__internal_4b7011b22acb37ae9248949d639f8a3d8cc939215d593131796273a18f9cd5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_607a35f6786264d33c35d308176eb8cce03b35293e2642cfd3b066df7ff78974->leave($__internal_607a35f6786264d33c35d308176eb8cce03b35293e2642cfd3b066df7ff78974_prof);

        
        $__internal_4b7011b22acb37ae9248949d639f8a3d8cc939215d593131796273a18f9cd5af->leave($__internal_4b7011b22acb37ae9248949d639f8a3d8cc939215d593131796273a18f9cd5af_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d00b43bff8e41680005898def1928f971ec3a9c5a59a31c118527a03b4aa070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d00b43bff8e41680005898def1928f971ec3a9c5a59a31c118527a03b4aa070->enter($__internal_7d00b43bff8e41680005898def1928f971ec3a9c5a59a31c118527a03b4aa070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1eb208b7382841273ad0a0e6a313e1dedac392ad41fdab3f3fbc494445820c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb208b7382841273ad0a0e6a313e1dedac392ad41fdab3f3fbc494445820c1a->enter($__internal_1eb208b7382841273ad0a0e6a313e1dedac392ad41fdab3f3fbc494445820c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1eb208b7382841273ad0a0e6a313e1dedac392ad41fdab3f3fbc494445820c1a->leave($__internal_1eb208b7382841273ad0a0e6a313e1dedac392ad41fdab3f3fbc494445820c1a_prof);

        
        $__internal_7d00b43bff8e41680005898def1928f971ec3a9c5a59a31c118527a03b4aa070->leave($__internal_7d00b43bff8e41680005898def1928f971ec3a9c5a59a31c118527a03b4aa070_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea78900c44d36997f68662257e24a03823a98963382b289ab4a7281442615d5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea78900c44d36997f68662257e24a03823a98963382b289ab4a7281442615d5a->enter($__internal_ea78900c44d36997f68662257e24a03823a98963382b289ab4a7281442615d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_66829ddbee54e1d36c097106201b0ca8f410039c72497f4fbe02f7c8f8a2db5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66829ddbee54e1d36c097106201b0ca8f410039c72497f4fbe02f7c8f8a2db5a->enter($__internal_66829ddbee54e1d36c097106201b0ca8f410039c72497f4fbe02f7c8f8a2db5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_66829ddbee54e1d36c097106201b0ca8f410039c72497f4fbe02f7c8f8a2db5a->leave($__internal_66829ddbee54e1d36c097106201b0ca8f410039c72497f4fbe02f7c8f8a2db5a_prof);

        
        $__internal_ea78900c44d36997f68662257e24a03823a98963382b289ab4a7281442615d5a->leave($__internal_ea78900c44d36997f68662257e24a03823a98963382b289ab4a7281442615d5a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f47f9b86285168afdaac818711c2f1cd2f58df0361ca0c1869515ae40375d645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f47f9b86285168afdaac818711c2f1cd2f58df0361ca0c1869515ae40375d645->enter($__internal_f47f9b86285168afdaac818711c2f1cd2f58df0361ca0c1869515ae40375d645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2bfda5fbd31e2ad49d73dd071a33be86b986ede3473fdddf88f4e8e4a5caf929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bfda5fbd31e2ad49d73dd071a33be86b986ede3473fdddf88f4e8e4a5caf929->enter($__internal_2bfda5fbd31e2ad49d73dd071a33be86b986ede3473fdddf88f4e8e4a5caf929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2bfda5fbd31e2ad49d73dd071a33be86b986ede3473fdddf88f4e8e4a5caf929->leave($__internal_2bfda5fbd31e2ad49d73dd071a33be86b986ede3473fdddf88f4e8e4a5caf929_prof);

        
        $__internal_f47f9b86285168afdaac818711c2f1cd2f58df0361ca0c1869515ae40375d645->leave($__internal_f47f9b86285168afdaac818711c2f1cd2f58df0361ca0c1869515ae40375d645_prof);

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
