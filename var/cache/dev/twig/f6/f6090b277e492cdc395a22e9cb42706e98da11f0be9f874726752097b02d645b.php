<?php

/* :client:new.html.twig */
class __TwigTemplate_104d39ac1720f06ee993a33af69b78a57d05b3379f97ec9f05412bf2a90ac70b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edb814c5ce7a84f8f4c2ac750c16b55713e09327b17176ff33e82dee0edb3593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb814c5ce7a84f8f4c2ac750c16b55713e09327b17176ff33e82dee0edb3593->enter($__internal_edb814c5ce7a84f8f4c2ac750c16b55713e09327b17176ff33e82dee0edb3593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $__internal_86ee26b9f5e1db514ab264c0711b0116d6dbc0e8dbcac14a56597898810ad481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ee26b9f5e1db514ab264c0711b0116d6dbc0e8dbcac14a56597898810ad481->enter($__internal_86ee26b9f5e1db514ab264c0711b0116d6dbc0e8dbcac14a56597898810ad481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edb814c5ce7a84f8f4c2ac750c16b55713e09327b17176ff33e82dee0edb3593->leave($__internal_edb814c5ce7a84f8f4c2ac750c16b55713e09327b17176ff33e82dee0edb3593_prof);

        
        $__internal_86ee26b9f5e1db514ab264c0711b0116d6dbc0e8dbcac14a56597898810ad481->leave($__internal_86ee26b9f5e1db514ab264c0711b0116d6dbc0e8dbcac14a56597898810ad481_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25c5eff7447079c3af58eae8fe10f5049f88957b0df442d3b280bcb28e79bf1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c5eff7447079c3af58eae8fe10f5049f88957b0df442d3b280bcb28e79bf1b->enter($__internal_25c5eff7447079c3af58eae8fe10f5049f88957b0df442d3b280bcb28e79bf1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0334e9cad5c070219ea1558770f765290d720d71d126da065c382a6824860a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0334e9cad5c070219ea1558770f765290d720d71d126da065c382a6824860a72->enter($__internal_0334e9cad5c070219ea1558770f765290d720d71d126da065c382a6824860a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0334e9cad5c070219ea1558770f765290d720d71d126da065c382a6824860a72->leave($__internal_0334e9cad5c070219ea1558770f765290d720d71d126da065c382a6824860a72_prof);

        
        $__internal_25c5eff7447079c3af58eae8fe10f5049f88957b0df442d3b280bcb28e79bf1b->leave($__internal_25c5eff7447079c3af58eae8fe10f5049f88957b0df442d3b280bcb28e79bf1b_prof);

    }

    public function getTemplateName()
    {
        return ":client:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Client creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_client_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":client:new.html.twig", "C:\\wamp64\\www\\ligne_rh\\app/Resources\\views/client/new.html.twig");
    }
}
