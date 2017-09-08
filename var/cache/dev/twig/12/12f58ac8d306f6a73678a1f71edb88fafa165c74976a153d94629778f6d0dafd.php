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
        $__internal_4cd06de175acbaedd73c6e144965e6123a988c8da0361c334258a4a4e377cab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd06de175acbaedd73c6e144965e6123a988c8da0361c334258a4a4e377cab1->enter($__internal_4cd06de175acbaedd73c6e144965e6123a988c8da0361c334258a4a4e377cab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/edit.html.twig"));

        $__internal_9a4688825b48bf479f224ab801c54523f8400c4dba5c6b1e05f2c29e80d387f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4688825b48bf479f224ab801c54523f8400c4dba5c6b1e05f2c29e80d387f2->enter($__internal_9a4688825b48bf479f224ab801c54523f8400c4dba5c6b1e05f2c29e80d387f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cd06de175acbaedd73c6e144965e6123a988c8da0361c334258a4a4e377cab1->leave($__internal_4cd06de175acbaedd73c6e144965e6123a988c8da0361c334258a4a4e377cab1_prof);

        
        $__internal_9a4688825b48bf479f224ab801c54523f8400c4dba5c6b1e05f2c29e80d387f2->leave($__internal_9a4688825b48bf479f224ab801c54523f8400c4dba5c6b1e05f2c29e80d387f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a414949e93b8da83456722a07537636382bc88c69db8aa9970ec6ee50d2accbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a414949e93b8da83456722a07537636382bc88c69db8aa9970ec6ee50d2accbb->enter($__internal_a414949e93b8da83456722a07537636382bc88c69db8aa9970ec6ee50d2accbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3be0b48355429e5c84c356872f5bd7e5583839b8156c716d8bd0ed76d7b51cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be0b48355429e5c84c356872f5bd7e5583839b8156c716d8bd0ed76d7b51cf7->enter($__internal_3be0b48355429e5c84c356872f5bd7e5583839b8156c716d8bd0ed76d7b51cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3be0b48355429e5c84c356872f5bd7e5583839b8156c716d8bd0ed76d7b51cf7->leave($__internal_3be0b48355429e5c84c356872f5bd7e5583839b8156c716d8bd0ed76d7b51cf7_prof);

        
        $__internal_a414949e93b8da83456722a07537636382bc88c69db8aa9970ec6ee50d2accbb->leave($__internal_a414949e93b8da83456722a07537636382bc88c69db8aa9970ec6ee50d2accbb_prof);

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
