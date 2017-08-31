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
        $__internal_0d7e90919bb7440049a4fdbb633f1687bfdc1f8a2173b184e81669179c40ab57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d7e90919bb7440049a4fdbb633f1687bfdc1f8a2173b184e81669179c40ab57->enter($__internal_0d7e90919bb7440049a4fdbb633f1687bfdc1f8a2173b184e81669179c40ab57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $__internal_1362ee7d4a156949686555466292548d4889ee16da92bdbe0839a99ee9232b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1362ee7d4a156949686555466292548d4889ee16da92bdbe0839a99ee9232b30->enter($__internal_1362ee7d4a156949686555466292548d4889ee16da92bdbe0839a99ee9232b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d7e90919bb7440049a4fdbb633f1687bfdc1f8a2173b184e81669179c40ab57->leave($__internal_0d7e90919bb7440049a4fdbb633f1687bfdc1f8a2173b184e81669179c40ab57_prof);

        
        $__internal_1362ee7d4a156949686555466292548d4889ee16da92bdbe0839a99ee9232b30->leave($__internal_1362ee7d4a156949686555466292548d4889ee16da92bdbe0839a99ee9232b30_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5173aae2b8a0ee9401a84048daea7d1484a458e08ce944fb5840b8147a1b33b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5173aae2b8a0ee9401a84048daea7d1484a458e08ce944fb5840b8147a1b33b->enter($__internal_b5173aae2b8a0ee9401a84048daea7d1484a458e08ce944fb5840b8147a1b33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d3bd9f0229295b2f6b8229b64b26bf29eba4f7b451b4fce5bf4db4d327dfcf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3bd9f0229295b2f6b8229b64b26bf29eba4f7b451b4fce5bf4db4d327dfcf9->enter($__internal_8d3bd9f0229295b2f6b8229b64b26bf29eba4f7b451b4fce5bf4db4d327dfcf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8d3bd9f0229295b2f6b8229b64b26bf29eba4f7b451b4fce5bf4db4d327dfcf9->leave($__internal_8d3bd9f0229295b2f6b8229b64b26bf29eba4f7b451b4fce5bf4db4d327dfcf9_prof);

        
        $__internal_b5173aae2b8a0ee9401a84048daea7d1484a458e08ce944fb5840b8147a1b33b->leave($__internal_b5173aae2b8a0ee9401a84048daea7d1484a458e08ce944fb5840b8147a1b33b_prof);

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
