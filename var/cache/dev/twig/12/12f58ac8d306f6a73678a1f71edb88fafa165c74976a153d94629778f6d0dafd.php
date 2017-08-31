<?php

/* client/edit.html.twig */
class __TwigTemplate_4b3bdea5fcd92963ac2b191483ca7d68d45c333979907b25c3049bc8dc8bb878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/edit.html.twig", 1);
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
        $__internal_e565e556e9ac328b9a9f605f359658072972f3c708dbde89c585fb9b5956f154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e565e556e9ac328b9a9f605f359658072972f3c708dbde89c585fb9b5956f154->enter($__internal_e565e556e9ac328b9a9f605f359658072972f3c708dbde89c585fb9b5956f154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/edit.html.twig"));

        $__internal_6a7c2df2660895654d92fd075dc2e7e666962b883b3c7b449d30eadd13354428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7c2df2660895654d92fd075dc2e7e666962b883b3c7b449d30eadd13354428->enter($__internal_6a7c2df2660895654d92fd075dc2e7e666962b883b3c7b449d30eadd13354428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e565e556e9ac328b9a9f605f359658072972f3c708dbde89c585fb9b5956f154->leave($__internal_e565e556e9ac328b9a9f605f359658072972f3c708dbde89c585fb9b5956f154_prof);

        
        $__internal_6a7c2df2660895654d92fd075dc2e7e666962b883b3c7b449d30eadd13354428->leave($__internal_6a7c2df2660895654d92fd075dc2e7e666962b883b3c7b449d30eadd13354428_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebaae9a8d6dfafc64713b38665674ba19cb8684c9c6cc25534dd6f16753a2af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebaae9a8d6dfafc64713b38665674ba19cb8684c9c6cc25534dd6f16753a2af4->enter($__internal_ebaae9a8d6dfafc64713b38665674ba19cb8684c9c6cc25534dd6f16753a2af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84891031c26a8409995803d8e1eb5b3111c672a71ffa549199c02e848554edea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84891031c26a8409995803d8e1eb5b3111c672a71ffa549199c02e848554edea->enter($__internal_84891031c26a8409995803d8e1eb5b3111c672a71ffa549199c02e848554edea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_84891031c26a8409995803d8e1eb5b3111c672a71ffa549199c02e848554edea->leave($__internal_84891031c26a8409995803d8e1eb5b3111c672a71ffa549199c02e848554edea_prof);

        
        $__internal_ebaae9a8d6dfafc64713b38665674ba19cb8684c9c6cc25534dd6f16753a2af4->leave($__internal_ebaae9a8d6dfafc64713b38665674ba19cb8684c9c6cc25534dd6f16753a2af4_prof);

    }

    public function getTemplateName()
    {
        return "client/edit.html.twig";
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
", "client/edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\app\\Resources\\views\\client\\edit.html.twig");
    }
}
