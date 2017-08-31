<?php

/* client/new.html.twig */
class __TwigTemplate_0bd334b9292fc3ce5b8b984c0b433e41aa635c8f7230888c1d498dd7f627f15a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/new.html.twig", 1);
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
        $__internal_b7b9d7459563596afc97e51b8d276b4914a1b23dcb939263462a3379ab081442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b9d7459563596afc97e51b8d276b4914a1b23dcb939263462a3379ab081442->enter($__internal_b7b9d7459563596afc97e51b8d276b4914a1b23dcb939263462a3379ab081442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/new.html.twig"));

        $__internal_ebc4ff3b23cf7100b49640630e2b4c13bdc57b07e86eb46343c17cd6eb41c0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc4ff3b23cf7100b49640630e2b4c13bdc57b07e86eb46343c17cd6eb41c0a5->enter($__internal_ebc4ff3b23cf7100b49640630e2b4c13bdc57b07e86eb46343c17cd6eb41c0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7b9d7459563596afc97e51b8d276b4914a1b23dcb939263462a3379ab081442->leave($__internal_b7b9d7459563596afc97e51b8d276b4914a1b23dcb939263462a3379ab081442_prof);

        
        $__internal_ebc4ff3b23cf7100b49640630e2b4c13bdc57b07e86eb46343c17cd6eb41c0a5->leave($__internal_ebc4ff3b23cf7100b49640630e2b4c13bdc57b07e86eb46343c17cd6eb41c0a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_726fb722a4ddb659580448fb80b866aef2980509c4d25b6297acaf28b0b7a21b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726fb722a4ddb659580448fb80b866aef2980509c4d25b6297acaf28b0b7a21b->enter($__internal_726fb722a4ddb659580448fb80b866aef2980509c4d25b6297acaf28b0b7a21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2267d3f65e9392ab0da4b39379f7de8396d70087e1b83414fea326b466444bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2267d3f65e9392ab0da4b39379f7de8396d70087e1b83414fea326b466444bc0->enter($__internal_2267d3f65e9392ab0da4b39379f7de8396d70087e1b83414fea326b466444bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2267d3f65e9392ab0da4b39379f7de8396d70087e1b83414fea326b466444bc0->leave($__internal_2267d3f65e9392ab0da4b39379f7de8396d70087e1b83414fea326b466444bc0_prof);

        
        $__internal_726fb722a4ddb659580448fb80b866aef2980509c4d25b6297acaf28b0b7a21b->leave($__internal_726fb722a4ddb659580448fb80b866aef2980509c4d25b6297acaf28b0b7a21b_prof);

    }

    public function getTemplateName()
    {
        return "client/new.html.twig";
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
", "client/new.html.twig", "C:\\wamp64\\www\\ligne_rh\\app\\Resources\\views\\client\\new.html.twig");
    }
}
