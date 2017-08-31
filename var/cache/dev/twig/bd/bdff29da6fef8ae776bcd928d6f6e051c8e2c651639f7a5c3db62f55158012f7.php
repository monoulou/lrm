<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_45243fdd1cc689572f3580121d1abfe42756fc20b61895204b951d4f53a78499 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_fe83fd2e6af8946ca8f7dfa44f16f9cf3a144333347bfa84aef2e45e33667118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe83fd2e6af8946ca8f7dfa44f16f9cf3a144333347bfa84aef2e45e33667118->enter($__internal_fe83fd2e6af8946ca8f7dfa44f16f9cf3a144333347bfa84aef2e45e33667118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_fe960882b4d6deaabbd8eb8d277bc82fbc3cc0340626d9201cf7df70c8da1129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe960882b4d6deaabbd8eb8d277bc82fbc3cc0340626d9201cf7df70c8da1129->enter($__internal_fe960882b4d6deaabbd8eb8d277bc82fbc3cc0340626d9201cf7df70c8da1129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe83fd2e6af8946ca8f7dfa44f16f9cf3a144333347bfa84aef2e45e33667118->leave($__internal_fe83fd2e6af8946ca8f7dfa44f16f9cf3a144333347bfa84aef2e45e33667118_prof);

        
        $__internal_fe960882b4d6deaabbd8eb8d277bc82fbc3cc0340626d9201cf7df70c8da1129->leave($__internal_fe960882b4d6deaabbd8eb8d277bc82fbc3cc0340626d9201cf7df70c8da1129_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91decafe4d343fd03fb3d6a37f85f178b5440abcd1b54002a4b9212b0c2cea98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91decafe4d343fd03fb3d6a37f85f178b5440abcd1b54002a4b9212b0c2cea98->enter($__internal_91decafe4d343fd03fb3d6a37f85f178b5440abcd1b54002a4b9212b0c2cea98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_686352227c9b0124749ce79a7071801f1f4d8a39e9fe9643b7421bf01f8fb686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_686352227c9b0124749ce79a7071801f1f4d8a39e9fe9643b7421bf01f8fb686->enter($__internal_686352227c9b0124749ce79a7071801f1f4d8a39e9fe9643b7421bf01f8fb686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_686352227c9b0124749ce79a7071801f1f4d8a39e9fe9643b7421bf01f8fb686->leave($__internal_686352227c9b0124749ce79a7071801f1f4d8a39e9fe9643b7421bf01f8fb686_prof);

        
        $__internal_91decafe4d343fd03fb3d6a37f85f178b5440abcd1b54002a4b9212b0c2cea98->leave($__internal_91decafe4d343fd03fb3d6a37f85f178b5440abcd1b54002a4b9212b0c2cea98_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b136c5f5c1ad8172ee00b1c16d847d387762ee180b8eafa1c6426d9358ae4d2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b136c5f5c1ad8172ee00b1c16d847d387762ee180b8eafa1c6426d9358ae4d2f->enter($__internal_b136c5f5c1ad8172ee00b1c16d847d387762ee180b8eafa1c6426d9358ae4d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_45c52616a597402e50a2b3b295b2ab802a9160b88daea23d706f805d82e0ff2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c52616a597402e50a2b3b295b2ab802a9160b88daea23d706f805d82e0ff2c->enter($__internal_45c52616a597402e50a2b3b295b2ab802a9160b88daea23d706f805d82e0ff2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_45c52616a597402e50a2b3b295b2ab802a9160b88daea23d706f805d82e0ff2c->leave($__internal_45c52616a597402e50a2b3b295b2ab802a9160b88daea23d706f805d82e0ff2c_prof);

        
        $__internal_b136c5f5c1ad8172ee00b1c16d847d387762ee180b8eafa1c6426d9358ae4d2f->leave($__internal_b136c5f5c1ad8172ee00b1c16d847d387762ee180b8eafa1c6426d9358ae4d2f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba1feb437dabcd4cfa083c59e90d863569bc1288a936e3b358257204e8548662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba1feb437dabcd4cfa083c59e90d863569bc1288a936e3b358257204e8548662->enter($__internal_ba1feb437dabcd4cfa083c59e90d863569bc1288a936e3b358257204e8548662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8f441b0b93b221e594a9e0d63fa1047e57b4f03cdbb3cc52fda92f70d9adccae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f441b0b93b221e594a9e0d63fa1047e57b4f03cdbb3cc52fda92f70d9adccae->enter($__internal_8f441b0b93b221e594a9e0d63fa1047e57b4f03cdbb3cc52fda92f70d9adccae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8f441b0b93b221e594a9e0d63fa1047e57b4f03cdbb3cc52fda92f70d9adccae->leave($__internal_8f441b0b93b221e594a9e0d63fa1047e57b4f03cdbb3cc52fda92f70d9adccae_prof);

        
        $__internal_ba1feb437dabcd4cfa083c59e90d863569bc1288a936e3b358257204e8548662->leave($__internal_ba1feb437dabcd4cfa083c59e90d863569bc1288a936e3b358257204e8548662_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
