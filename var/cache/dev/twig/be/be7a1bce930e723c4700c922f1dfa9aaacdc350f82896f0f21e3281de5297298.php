<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0920480bce2627ecd94a394abf3aaa1f6c65e33cafdf6a6f6aa2a2466968148c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_c2efabbaf7cf8268f20aa50830cccb028fd40ec3634aaa1a1b1103854349e0f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2efabbaf7cf8268f20aa50830cccb028fd40ec3634aaa1a1b1103854349e0f7->enter($__internal_c2efabbaf7cf8268f20aa50830cccb028fd40ec3634aaa1a1b1103854349e0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_88b0a993131b372faa5c779b1ea3fd7d994f40cf08b5f5169cd7f6d16becb2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b0a993131b372faa5c779b1ea3fd7d994f40cf08b5f5169cd7f6d16becb2f8->enter($__internal_88b0a993131b372faa5c779b1ea3fd7d994f40cf08b5f5169cd7f6d16becb2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2efabbaf7cf8268f20aa50830cccb028fd40ec3634aaa1a1b1103854349e0f7->leave($__internal_c2efabbaf7cf8268f20aa50830cccb028fd40ec3634aaa1a1b1103854349e0f7_prof);

        
        $__internal_88b0a993131b372faa5c779b1ea3fd7d994f40cf08b5f5169cd7f6d16becb2f8->leave($__internal_88b0a993131b372faa5c779b1ea3fd7d994f40cf08b5f5169cd7f6d16becb2f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_99a7f6e3e10bfbf8309218686a812cfa166a27ba62bba40d183a5726b9074a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a7f6e3e10bfbf8309218686a812cfa166a27ba62bba40d183a5726b9074a45->enter($__internal_99a7f6e3e10bfbf8309218686a812cfa166a27ba62bba40d183a5726b9074a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9c943c7fcb5d17ed4103b6ac464153bf57127e24e46fdaf225fb35b721da4ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c943c7fcb5d17ed4103b6ac464153bf57127e24e46fdaf225fb35b721da4ba4->enter($__internal_9c943c7fcb5d17ed4103b6ac464153bf57127e24e46fdaf225fb35b721da4ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9c943c7fcb5d17ed4103b6ac464153bf57127e24e46fdaf225fb35b721da4ba4->leave($__internal_9c943c7fcb5d17ed4103b6ac464153bf57127e24e46fdaf225fb35b721da4ba4_prof);

        
        $__internal_99a7f6e3e10bfbf8309218686a812cfa166a27ba62bba40d183a5726b9074a45->leave($__internal_99a7f6e3e10bfbf8309218686a812cfa166a27ba62bba40d183a5726b9074a45_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5faa3362210333d1d2cf0152839eb6b3a76981bc0ff61ae44b9cf9e1b4f8d8c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5faa3362210333d1d2cf0152839eb6b3a76981bc0ff61ae44b9cf9e1b4f8d8c1->enter($__internal_5faa3362210333d1d2cf0152839eb6b3a76981bc0ff61ae44b9cf9e1b4f8d8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ec7b3355192622630c8d5959dc4d35ce247204a12ec765d074982f6edb385340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7b3355192622630c8d5959dc4d35ce247204a12ec765d074982f6edb385340->enter($__internal_ec7b3355192622630c8d5959dc4d35ce247204a12ec765d074982f6edb385340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ec7b3355192622630c8d5959dc4d35ce247204a12ec765d074982f6edb385340->leave($__internal_ec7b3355192622630c8d5959dc4d35ce247204a12ec765d074982f6edb385340_prof);

        
        $__internal_5faa3362210333d1d2cf0152839eb6b3a76981bc0ff61ae44b9cf9e1b4f8d8c1->leave($__internal_5faa3362210333d1d2cf0152839eb6b3a76981bc0ff61ae44b9cf9e1b4f8d8c1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_72e80c7993914a5579d9f16a9d17c7e827ea0a097d4758c24cb9774733df99f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72e80c7993914a5579d9f16a9d17c7e827ea0a097d4758c24cb9774733df99f7->enter($__internal_72e80c7993914a5579d9f16a9d17c7e827ea0a097d4758c24cb9774733df99f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_726f4544a9c14a4779463fe7bf039600d41c5301cf334d1c08d43c139cb2b9bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726f4544a9c14a4779463fe7bf039600d41c5301cf334d1c08d43c139cb2b9bf->enter($__internal_726f4544a9c14a4779463fe7bf039600d41c5301cf334d1c08d43c139cb2b9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_726f4544a9c14a4779463fe7bf039600d41c5301cf334d1c08d43c139cb2b9bf->leave($__internal_726f4544a9c14a4779463fe7bf039600d41c5301cf334d1c08d43c139cb2b9bf_prof);

        
        $__internal_72e80c7993914a5579d9f16a9d17c7e827ea0a097d4758c24cb9774733df99f7->leave($__internal_72e80c7993914a5579d9f16a9d17c7e827ea0a097d4758c24cb9774733df99f7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
