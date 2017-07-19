<?php

/* :client:edit.html.twig */
class __TwigTemplate_22937556a3e0db39abb1f377380683e484d90e3b100cc3a4f23064a188bdbebf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:edit.html.twig", 1);
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
        $__internal_6d829159bc5911d5b6b3103d236800a91832a6c90786a104b2f7b57ec6481de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d829159bc5911d5b6b3103d236800a91832a6c90786a104b2f7b57ec6481de7->enter($__internal_6d829159bc5911d5b6b3103d236800a91832a6c90786a104b2f7b57ec6481de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:edit.html.twig"));

        $__internal_d1aedf12f0e613cba3774ff9300185859df772ccc09adfc9c7df9653d2b1aa46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1aedf12f0e613cba3774ff9300185859df772ccc09adfc9c7df9653d2b1aa46->enter($__internal_d1aedf12f0e613cba3774ff9300185859df772ccc09adfc9c7df9653d2b1aa46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d829159bc5911d5b6b3103d236800a91832a6c90786a104b2f7b57ec6481de7->leave($__internal_6d829159bc5911d5b6b3103d236800a91832a6c90786a104b2f7b57ec6481de7_prof);

        
        $__internal_d1aedf12f0e613cba3774ff9300185859df772ccc09adfc9c7df9653d2b1aa46->leave($__internal_d1aedf12f0e613cba3774ff9300185859df772ccc09adfc9c7df9653d2b1aa46_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_48a6522902ece0d6bec0437177a388eb97435a55816160264b6587cf869f17c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a6522902ece0d6bec0437177a388eb97435a55816160264b6587cf869f17c0->enter($__internal_48a6522902ece0d6bec0437177a388eb97435a55816160264b6587cf869f17c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20492a2e6afa3197428c91a5a636c6571d500b287c4a94fcbcb9bc573fe75977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20492a2e6afa3197428c91a5a636c6571d500b287c4a94fcbcb9bc573fe75977->enter($__internal_20492a2e6afa3197428c91a5a636c6571d500b287c4a94fcbcb9bc573fe75977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_20492a2e6afa3197428c91a5a636c6571d500b287c4a94fcbcb9bc573fe75977->leave($__internal_20492a2e6afa3197428c91a5a636c6571d500b287c4a94fcbcb9bc573fe75977_prof);

        
        $__internal_48a6522902ece0d6bec0437177a388eb97435a55816160264b6587cf869f17c0->leave($__internal_48a6522902ece0d6bec0437177a388eb97435a55816160264b6587cf869f17c0_prof);

    }

    public function getTemplateName()
    {
        return ":client:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Client edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_client_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":client:edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\app/Resources\\views/client/edit.html.twig");
    }
}
