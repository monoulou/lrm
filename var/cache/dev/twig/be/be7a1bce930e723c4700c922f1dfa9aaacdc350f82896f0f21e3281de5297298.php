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
        $__internal_7ed839a053ee381e7a0461ec6c49a715c4358db67c8def187fcd2528bff93e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed839a053ee381e7a0461ec6c49a715c4358db67c8def187fcd2528bff93e29->enter($__internal_7ed839a053ee381e7a0461ec6c49a715c4358db67c8def187fcd2528bff93e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cf9322ce8e45f9b07cb171807e76baecbfd36bf22801bf9009e5041502ba105f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9322ce8e45f9b07cb171807e76baecbfd36bf22801bf9009e5041502ba105f->enter($__internal_cf9322ce8e45f9b07cb171807e76baecbfd36bf22801bf9009e5041502ba105f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ed839a053ee381e7a0461ec6c49a715c4358db67c8def187fcd2528bff93e29->leave($__internal_7ed839a053ee381e7a0461ec6c49a715c4358db67c8def187fcd2528bff93e29_prof);

        
        $__internal_cf9322ce8e45f9b07cb171807e76baecbfd36bf22801bf9009e5041502ba105f->leave($__internal_cf9322ce8e45f9b07cb171807e76baecbfd36bf22801bf9009e5041502ba105f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4f583f62d15a0a36941df3e7bc78ee7074186bcfa938f625a27e356eff56820f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f583f62d15a0a36941df3e7bc78ee7074186bcfa938f625a27e356eff56820f->enter($__internal_4f583f62d15a0a36941df3e7bc78ee7074186bcfa938f625a27e356eff56820f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f794270a4326085acbbad10f645ef11ccddef704b6cf3f7108c5cc6cfd5512aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f794270a4326085acbbad10f645ef11ccddef704b6cf3f7108c5cc6cfd5512aa->enter($__internal_f794270a4326085acbbad10f645ef11ccddef704b6cf3f7108c5cc6cfd5512aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f794270a4326085acbbad10f645ef11ccddef704b6cf3f7108c5cc6cfd5512aa->leave($__internal_f794270a4326085acbbad10f645ef11ccddef704b6cf3f7108c5cc6cfd5512aa_prof);

        
        $__internal_4f583f62d15a0a36941df3e7bc78ee7074186bcfa938f625a27e356eff56820f->leave($__internal_4f583f62d15a0a36941df3e7bc78ee7074186bcfa938f625a27e356eff56820f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8aafd4e80dcaa97e3597fd29394df5d16c122da19f7fd691cbad30b1300fecb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aafd4e80dcaa97e3597fd29394df5d16c122da19f7fd691cbad30b1300fecb8->enter($__internal_8aafd4e80dcaa97e3597fd29394df5d16c122da19f7fd691cbad30b1300fecb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_97bed318af02d93994465b6dba4b31abd0100d0e4414dc4986c20495e99bb149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97bed318af02d93994465b6dba4b31abd0100d0e4414dc4986c20495e99bb149->enter($__internal_97bed318af02d93994465b6dba4b31abd0100d0e4414dc4986c20495e99bb149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_97bed318af02d93994465b6dba4b31abd0100d0e4414dc4986c20495e99bb149->leave($__internal_97bed318af02d93994465b6dba4b31abd0100d0e4414dc4986c20495e99bb149_prof);

        
        $__internal_8aafd4e80dcaa97e3597fd29394df5d16c122da19f7fd691cbad30b1300fecb8->leave($__internal_8aafd4e80dcaa97e3597fd29394df5d16c122da19f7fd691cbad30b1300fecb8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_680283ae7e93156bd45db41616de6249dd44783c63d6addd59e2bbc54cb4b2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_680283ae7e93156bd45db41616de6249dd44783c63d6addd59e2bbc54cb4b2d2->enter($__internal_680283ae7e93156bd45db41616de6249dd44783c63d6addd59e2bbc54cb4b2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3f19089a3a8af1843274f31c96b5c4f835894dab369158d33560655599ecbf62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f19089a3a8af1843274f31c96b5c4f835894dab369158d33560655599ecbf62->enter($__internal_3f19089a3a8af1843274f31c96b5c4f835894dab369158d33560655599ecbf62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3f19089a3a8af1843274f31c96b5c4f835894dab369158d33560655599ecbf62->leave($__internal_3f19089a3a8af1843274f31c96b5c4f835894dab369158d33560655599ecbf62_prof);

        
        $__internal_680283ae7e93156bd45db41616de6249dd44783c63d6addd59e2bbc54cb4b2d2->leave($__internal_680283ae7e93156bd45db41616de6249dd44783c63d6addd59e2bbc54cb4b2d2_prof);

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
