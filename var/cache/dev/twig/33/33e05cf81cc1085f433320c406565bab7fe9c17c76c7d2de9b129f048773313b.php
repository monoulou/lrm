<?php

/* client/show.html.twig */
class __TwigTemplate_4aeae30f6941cf354bdf3e55563da839934c24f6d905b00c1f24a96018964e4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/show.html.twig", 1);
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
        $__internal_c0704bca8faf2f2fd10f6dd635424c6aa1240c150d3a734b1bc20031791d9b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0704bca8faf2f2fd10f6dd635424c6aa1240c150d3a734b1bc20031791d9b4d->enter($__internal_c0704bca8faf2f2fd10f6dd635424c6aa1240c150d3a734b1bc20031791d9b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $__internal_9095c2362b6542e3b78f6fc70ad0a4be8004cba7c7275a88c6843e1acbbd4179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9095c2362b6542e3b78f6fc70ad0a4be8004cba7c7275a88c6843e1acbbd4179->enter($__internal_9095c2362b6542e3b78f6fc70ad0a4be8004cba7c7275a88c6843e1acbbd4179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0704bca8faf2f2fd10f6dd635424c6aa1240c150d3a734b1bc20031791d9b4d->leave($__internal_c0704bca8faf2f2fd10f6dd635424c6aa1240c150d3a734b1bc20031791d9b4d_prof);

        
        $__internal_9095c2362b6542e3b78f6fc70ad0a4be8004cba7c7275a88c6843e1acbbd4179->leave($__internal_9095c2362b6542e3b78f6fc70ad0a4be8004cba7c7275a88c6843e1acbbd4179_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f478a77419fa111139691d6eb16213371b195816acbc1796898c46c7a5cdbb02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f478a77419fa111139691d6eb16213371b195816acbc1796898c46c7a5cdbb02->enter($__internal_f478a77419fa111139691d6eb16213371b195816acbc1796898c46c7a5cdbb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9afd995b4cfe05485641c264cea2cb36434b3fa6c33b120a1f7f14c3ad2a246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9afd995b4cfe05485641c264cea2cb36434b3fa6c33b120a1f7f14c3ad2a246->enter($__internal_a9afd995b4cfe05485641c264cea2cb36434b3fa6c33b120a1f7f14c3ad2a246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Denomination</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "denomination", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomcontact</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nomContact", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fonctioncontact</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "fonctionContact", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "etat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Commentaire</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "commentaire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdate</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "createDate", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_edit", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a9afd995b4cfe05485641c264cea2cb36434b3fa6c33b120a1f7f14c3ad2a246->leave($__internal_a9afd995b4cfe05485641c264cea2cb36434b3fa6c33b120a1f7f14c3ad2a246_prof);

        
        $__internal_f478a77419fa111139691d6eb16213371b195816acbc1796898c46c7a5cdbb02->leave($__internal_f478a77419fa111139691d6eb16213371b195816acbc1796898c46c7a5cdbb02_prof);

    }

    public function getTemplateName()
    {
        return "client/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 57,  135 => 55,  129 => 52,  123 => 49,  113 => 42,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Client</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ client.id }}</td>
            </tr>
            <tr>
                <th>Denomination</th>
                <td>{{ client.denomination }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ client.adresse }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ client.telephone }}</td>
            </tr>
            <tr>
                <th>Nomcontact</th>
                <td>{{ client.nomContact }}</td>
            </tr>
            <tr>
                <th>Fonctioncontact</th>
                <td>{{ client.fonctionContact }}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{{ client.etat }}</td>
            </tr>
            <tr>
                <th>Commentaire</th>
                <td>{{ client.commentaire }}</td>
            </tr>
            <tr>
                <th>Createdate</th>
                <td>{{ client.createDate }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_client_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_client_edit', { 'id': client.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "client/show.html.twig", "C:\\wamp64\\www\\ligne_rh\\app\\Resources\\views\\client\\show.html.twig");
    }
}
